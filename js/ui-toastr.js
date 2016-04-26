//弹窗通知
var pageNotify = function (type,title,msg) {
  var i = -1,toastCount = 0,$toastlast;
  var shortCutFunction = type;//error,warning,success,info
  var toastIndex = toastCount++;
  
  toastr.options = {
      closeButton: true,
      debug: false,
      positionClass: 'toast-top-right',
      showDuration: '1000',
      hideDuration: '1000',
      timeOut: '10000',
      extendedTimeOut: '1000',
      showEasing: 'swing',
      hideEasing: 'linear',
      showMethod: 'slideDown',
      hideMethod: 'slideUp',
      onclick: null
  };
  
  var $toast = toastr[shortCutFunction](msg, title);
  $toastlast = $toast;
            
  $('#cleartoasts').click(function () {
    toastr.clear();
  });
}