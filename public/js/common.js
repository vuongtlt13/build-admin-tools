const BAD_PAYLOAD = 422;

const parseNumber = (data, c=2, d=".", t=",") => {
    return parseInt(String(data).split(t).join(''));
}

const formatNumber = (data, c=2, d=".", t=",") => {
    return (data).toFixed(c).replace(/(\d)(?=(\d{3})+(?:\.\d+)?$)/g, "$1,");
}

const showNotificationFromResponse = (resp, time=5000, successTitle = 'Thành công!', errorTitle = 'Thất bại!') => {
    if (resp.success) toastr.success(resp.message, successTitle, {timeOut: time})
    else toastr.error(resp.message, errorTitle, {timeOut: time});
}

const showNotificationFromError = (error, time=5000, errorTitle = 'Có lỗi xảy ra!') => {
    switch (error.status) {
        case BAD_PAYLOAD:
            toastr.error(error.responseText, 'Dữ liệu nhập vào không hợp lệ!', {timeOut: time});
            break;
        default:
            toastr.error(error, errorTitle, {timeOut: time});
    }
}

const defaultOnBeforeSend = () => {}

const defaultOnCompleted = () => {}

const defaultOnSuccess = (resp, table = null, modal = null) => {
    showNotificationFromResponse(resp);
    if (table) table.ajax.reload();
    if (modal) modal.modal('hide');
}

const defaultOnError = (error) => {
    showNotificationFromError(error);
}

const defaultAjaxOptions = {
    type: 'get',
    onBeforeSend: defaultOnBeforeSend,
    onSuccess: defaultOnSuccess,
    onError: defaultOnError,
    onCompleted: defaultOnCompleted,
    table: null,
    data: {},
    modal: null,
}

const mergeAjaxOptions = (options, defaultAjaxOptions) => {
    return {
        ...defaultAjaxOptions,
        ...options
    }
}

const sendAjax = (url, data, type = 'get', onSuccess=defaultOnSuccess, onFail=defaultOnError, onComplete=defaultOnCompleted, beforeSend=defaultOnBeforeSend) => {
    $.ajax({
        url: url,
        type: type,
        data: data,
        beforeSend: beforeSend,
        success: onSuccess,
        error: onFail,
        complete: onComplete
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
}
