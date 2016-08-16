var Notification;

(function() {
    Notification = my.Class({

        constructor: function (params)
        {
            if(null != notifier) {
                if(notifier.error) {
                    this.showErrors(notifier.error);
                }

                if(notifier.info) {
                    this.showInfos(notifier.info);
                }

                if(notifier.success) {
                    this.showSuccess(notifier.success);
                }

                if(notifier.warning) {
                    this.showWarnings(notifier.warning);
                }
            }
        },

        showToastr: function (type, message) {
            toastr[type](message);
        },

        showErrors: function (data) {
            var self;
            self = this;

            $.each(data, function (index, message) {
                self.showToastr('error', message);
            });
        },

        showInfos: function (data) {
            var self;
            self = this;

            $.each(data, function (index, message) {
                self.showToastr('info', message);
            });
        },

        showSuccess: function (data) {
            var self;
            self = this;

            $.each(data, function (index, message) {
                self.showToastr('success', message);
            });
        },

        showWarnings: function (data) {
            var self;
            self = this;

            $.each(data, function (index, message) {
                self.showToastr('warning', message);
            });
        },
    });
})();

$(document).ready(function () {
    new Notification();
});