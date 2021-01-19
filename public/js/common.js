const BAD_PAYLOAD = 422;

String.prototype.format = function () {
    let i = 0, args = arguments;
    return this.replace(/%s/g, function () {
        return typeof args[i] != 'undefined' ? args[i++] : '';
    });
};

const parseNumber = (data, c=2, d=".", t=",") => {
    return parseInt(String(data).split(t).join(''));
};

const formatNumber = (data, c=2, d=".", t=",") => {
    return (data).toFixed(c).replace(/(\d)(?=(\d{3})+(?:\.\d+)?$)/g, "$1,");
};

const showNotificationFromResponse = (resp, time=5000, successTitle = 'Thành công!', errorTitle = 'Thất bại!') => {
    if (resp.success) toastr.success(resp.message, successTitle, {timeOut: time})
    else toastr.error(resp.message, errorTitle, {timeOut: time});
};

const showNotificationFromError = (error, time=5000, errorTitle = 'Có lỗi xảy ra!') => {
    switch (error.status) {
        case BAD_PAYLOAD:
            toastr.error(error.responseText, 'Dữ liệu nhập vào không hợp lệ!', {timeOut: time});
            break;
        default:
            toastr.error(error, errorTitle, {timeOut: time});
    }
};

const defaultOnBeforeSend = () => {};

const defaultOnCompleted = () => {};

const defaultOnSuccess = (resp, table = null, modal = null) => {
    showNotificationFromResponse(resp);
    if (table) table.ajax.reload();
    if (modal) modal.modal('hide');
};

const defaultOnError = (error) => {
    showNotificationFromError(error);
};

const defaultAjaxOptions = {
    type: 'get',
    onBeforeSend: defaultOnBeforeSend,
    onSuccess: defaultOnSuccess,
    onError: defaultOnError,
    onCompleted: defaultOnCompleted,
    table: null,
    data: {},
    modal: null,
};

const mergeAjaxOptions = (options, defaultAjaxOptions) => {
    return {
        ...defaultAjaxOptions,
        ...options
    }
};

const sendAjax = (url, data, type = 'get', options = null) => {
    const ajaxOptions = {
        ...defaultAjaxOptions,
    }
    if (options === null) options = ajaxOptions;
    else options = mergeAjaxOptions(options, ajaxOptions)
    $.ajax({
        url: url,
        type: type,
        data: data,
        beforeSend: options.onBeforeSend,
        success: function (resp) {
            options.onSuccess(resp, options.table, options.modal);
        },
        error: options.onError,
        complete: options.onCompleted
    });
};

const sendFormAjax = (jQueryForm, options = null) => {
    const ajaxOptions = {
        ...defaultAjaxOptions,
        url: jQueryForm.attr('action'),
        type: jQueryForm.attr('method'),
    }
    if (options === null) options = ajaxOptions;
    else options = mergeAjaxOptions(options, ajaxOptions)
    jQueryForm.ajaxSubmit({
        url: options.url,
        type: options.type,
        dataType: 'json',
        beforeSubmit: function(arr, $form, options) {
            let name;
            for (name in options.data) {
                arr.push({"name": name, 'value': options[name]});
            }
        },
        beforeSend: options.onBeforeSend,
        data: options.data,
        success: function (resp) {
            options.onSuccess(resp, options.table, options.modal);
        },
        error: options.onError,
        complete: options.onCompleted
    });
};

const resetForm = (form) => {
    form.find('input').each(function (index, ele) {
        let jqueryObj = $(ele);
        let value = jqueryObj.data('defaultValue') || null;

        if ((!jqueryObj.hasClass('ignore-reset')) &&  (jqueryObj.attr('type') !== 'checkbox')) jqueryObj.val(value);
    });

    form.find('select').each(function (index, ele) {
        let jqueryObj = $(ele);
        let value = jqueryObj.data('defaultValue') || null;
        if (!jqueryObj.hasClass('ignore-reset')) {
            jqueryObj.val(value);
            if (jqueryObj.hasClass('select2')) jqueryObj.trigger('change');
        }
    });
};

const getValueByAttr = (data, attrs) => {
    let res = null;
    attrs.map((attr) => {
        if (res === null) res = data[attr];
        else {
            if (res !== undefined) res = res[attr];
        }
    });
    return res;
};

const fillData = (form, data, htmlType, handler) => {
    form.find(htmlType).each(function (index, ele) {
        let jqueryObj = $(ele);
        if (jqueryObj[0].hasAttribute('data-column')) {
            let dataField =  jqueryObj.attr('data-column');
            let attrs = dataField.split(".");
            let value = getValueByAttr(data, attrs);
            handler(jqueryObj, value);
        }
    });
};

const fillTextAreaFunc = (jqueryObj, value) => {
    if (jqueryObj.attr('data-role') === 'tagsinput') {
        jqueryObj.tagsinput('removeAll');
        jqueryObj.tagsinput('add', value);
    }
    else jqueryObj.val(value);
};

const fillInputFunc = (jqueryObj, value) => {
    if (jqueryObj.attr('data-role') === 'tagsinput') {
        jqueryObj.tagsinput('removeAll');
        jqueryObj.tagsinput('add', value);
    }
    else if (jqueryObj.attr('type') === 'checkbox') jqueryObj.prop('checked', value == 1);
    else jqueryObj.val(value);
};

const fillSelectFunc = (jqueryObj, value) => {
    jqueryObj.val(value);
    if (jqueryObj.hasClass('select2'))
        jqueryObj.trigger('change');
};

const fillEditForm = (data, form) => {
    let templateAction = form.data('templateAction');
    form.attr('action', templateAction.format(data.id));

    fillData(form, data, 'textarea', fillTextAreaFunc);
    fillData(form, data, 'input', fillInputFunc);
    fillData(form, data, 'select', fillSelectFunc);
};

const editRecord = (ele, editForm) => {
    let table = $(ele).closest('table').DataTable();
    let row = $(ele).closest('tr');
    let data = table.row(row).data();
    fillEditForm(data, editForm);
    editForm.closest('div.modal').modal('show');
};

const confirmBox = async (options = {}) => {
    let finalOptions = {
        ...defaultConfirmOptions,
        ...options,
    }
    return await swal({
        title: finalOptions.mainText,
        text: finalOptions.detailText,
        icon: finalOptions.icon,
        buttons: [finalOptions.cancel, finalOptions.agree],
        dangerMode: true,
    });
};

const deleteRecord = async (ele, uri, isConfirm=true, options = {}) => {
    let isConfirmed = true;
    if (isConfirm) isConfirmed = await confirmBox(options);
    if (isConfirmed) {
        let table = $(ele).closest('table').DataTable();
        let row = $(ele).closest('tr');
        let id = table.row(row).data().id;

        sendAjax(uri.format(id), {
            '_method': 'DELETE',
        }, 'post', {
            table: table
        })
    }
};

const fnRowCallBack = ( ele, data, rowIndex, selectedRows) => {
    let row = $(ele);
    if ( $.inArray(data.id, selectedRows) !== -1 ) {
        if (!row.hasClass('selected_row')) row.addClass('selected_row');
    } else {
        if (row.hasClass('selected_row')) row.removeClass('selected_row');
    }
};

const initDatatableEvent = (tableSelector, selectedRows) => {
    let table = $(tableSelector).DataTable();

    $(tableSelector).on( 'click', 'tbody tr', function (evt) {
        if ($(evt.target).closest('button').hasClass('datatable-action')) return;

        let id = table.row(this).data().id;
        let index = $.inArray(id, selectedRows);
        $(this).toggleClass('selected_row');
        if ($(this).hasClass('selected_row')) {
            if ( index === -1 ) selectedRows.push( id );
        } else {
            if ( index !== -1 ) selectedRows.splice(index, 1);
        }
    } );
};
