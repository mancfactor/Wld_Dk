/*
    A simple jQuery kfmodal (http://github.com/kylefox/jquery-kfmodal)
    Version 0.9.1
*/
! function(o) {
    "object" == typeof module && "object" == typeof module.exports ? o(require("jquery"), window, document) : o(jQuery, window, document)
}(function(o, t, i, e) {
    var s = [],
        l = function() {
            return s.length ? s[s.length - 1] : null
        },
        n = function() {
            var o, t = !1;
            for (o = s.length - 1; o >= 0; o--) s[o].$blocker && (s[o].$blocker.toggleClass("current", !t).toggleClass("behind", t), t = !0)
        };
    o.kfmodal = function(t, i) {
        var e, n;
        if (this.$body = o("body"), this.options = o.extend({}, o.kfmodal.defaults, i), this.options.doFade = !isNaN(parseInt(this.options.fadeDuration, 10)), this.$blocker = null, this.options.closeExisting)
            for (; o.kfmodal.isActive();) o.kfmodal.close();
        if (s.push(this), t.is("a"))
            if (n = t.attr("href"), this.anchor = t, /^#/.test(n)) {
                if (this.$elm = o(n), 1 !== this.$elm.length) return null;
                this.$body.append(this.$elm), this.open()
            } else this.$elm = o("<div>"), this.$body.append(this.$elm), e = function(o, t) {
                t.elm.remove()
            }, this.showSpinner(), t.trigger(o.kfmodal.AJAX_SEND), o.get(n).done(function(i) {
                if (o.kfmodal.isActive()) {
                    t.trigger(o.kfmodal.AJAX_SUCCESS);
                    var s = l();
                    s.$elm.empty().append(i).on(o.kfmodal.CLOSE, e), s.hideSpinner(), s.open(), t.trigger(o.kfmodal.AJAX_COMPLETE)
                }
            }).fail(function() {
                t.trigger(o.kfmodal.AJAX_FAIL);
                var i = l();
                i.hideSpinner(), s.pop(), t.trigger(o.kfmodal.AJAX_COMPLETE)
            });
        else this.$elm = t, this.anchor = t, this.$body.append(this.$elm), this.open()
    }, o.kfmodal.prototype = {
        constructor: o.kfmodal,
        open: function() {
            var t = this;
            this.block(), this.anchor.blur(), this.options.doFade ? setTimeout(function() {
                t.show()
            }, this.options.fadeDuration * this.options.fadeDelay) : this.show(), o(i).off("keydown.kfmodal").on("keydown.kfmodal", function(o) {
                var t = l();
                27 === o.which && t.options.escapeClose && t.close()
            }), this.options.clickClose && this.$blocker.click(function(t) {
                t.target === this && o.kfmodal.close()
            })
        },
        close: function() {
            s.pop(), this.unblock(), this.hide(), o.kfmodal.isActive() || o(i).off("keydown.kfmodal")
        },
        block: function() {
            this.$elm.trigger(o.kfmodal.BEFORE_BLOCK, [this._ctx()]), this.$body.css("overflow", "hidden"), this.$blocker = o('<div class="' + this.options.blockerClass + ' blocker current"></div>').appendTo(this.$body), n(), this.options.doFade && this.$blocker.css("opacity", 0).animate({
                opacity: 1
            }, this.options.fadeDuration), this.$elm.trigger(o.kfmodal.BLOCK, [this._ctx()])
        },
        unblock: function(t) {
            !t && this.options.doFade ? this.$blocker.fadeOut(this.options.fadeDuration, this.unblock.bind(this, !0)) : (this.$blocker.children().appendTo(this.$body), this.$blocker.remove(), this.$blocker = null, n(), o.kfmodal.isActive() || this.$body.css("overflow", ""))
        },
        show: function() {
            this.$elm.trigger(o.kfmodal.BEFORE_OPEN, [this._ctx()]), this.options.showClose && (this.closeButton = o('<a href="#close-kfmodal" rel="kfmodal:close" class="close-kfmodal ' + this.options.closeClass + '">' + this.options.closeText + "</a>"), this.$elm.append(this.closeButton)), this.$elm.addClass(this.options.kfmodalClass).appendTo(this.$blocker), this.options.doFade ? this.$elm.css({
                opacity: 0,
                display: "inline-block"
            }).animate({
                opacity: 1
            }, this.options.fadeDuration) : this.$elm.css("display", "inline-block"), this.$elm.trigger(o.kfmodal.OPEN, [this._ctx()])
        },
        hide: function() {
            this.$elm.trigger(o.kfmodal.BEFORE_CLOSE, [this._ctx()]), this.closeButton && this.closeButton.remove();
            var t = this;
            this.options.doFade ? this.$elm.fadeOut(this.options.fadeDuration, function() {
                t.$elm.trigger(o.kfmodal.AFTER_CLOSE, [t._ctx()])
            }) : this.$elm.hide(0, function() {
                t.$elm.trigger(o.kfmodal.AFTER_CLOSE, [t._ctx()])
            }), this.$elm.trigger(o.kfmodal.CLOSE, [this._ctx()])
        },
        showSpinner: function() {
            this.options.showSpinner && (this.spinner = this.spinner || o('<div class="' + this.options.kfmodalClass + '-spinner"></div>').append(this.options.spinnerHtml), this.$body.append(this.spinner), this.spinner.show())
        },
        hideSpinner: function() {
            this.spinner && this.spinner.remove()
        },
        _ctx: function() {
            return {
                elm: this.$elm,
                $elm: this.$elm,
                $blocker: this.$blocker,
                options: this.options
            }
        }
    }, o.kfmodal.close = function(t) {
        if (o.kfmodal.isActive()) {
            t && t.preventDefault();
            var i = l();
            return i.close(), i.$elm
        }
    }, o.kfmodal.isActive = function() {
        return s.length > 0
    }, o.kfmodal.getCurrent = l, o.kfmodal.defaults = {
        closeExisting: !0,
        escapeClose: !0,
        clickClose: !0,
        closeText: "Close",
        closeClass: "",
        kfmodalClass: "kfmodal",
        blockerClass: "jquery-kfmodal",
        spinnerHtml: '<div class="rect1"></div><div class="rect2"></div><div class="rect3"></div><div class="rect4"></div>',
        showSpinner: !0,
        showClose: !0,
        fadeDuration: null,
        fadeDelay: 1
    }, o.kfmodal.BEFORE_BLOCK = "kfmodal:before-block", o.kfmodal.BLOCK = "kfmodal:block", o.kfmodal.BEFORE_OPEN = "kfmodal:before-open", o.kfmodal.OPEN = "kfmodal:open", o.kfmodal.BEFORE_CLOSE = "kfmodal:before-close", o.kfmodal.CLOSE = "kfmodal:close", o.kfmodal.AFTER_CLOSE = "kfmodal:after-close", o.kfmodal.AJAX_SEND = "kfmodal:ajax:send", o.kfmodal.AJAX_SUCCESS = "kfmodal:ajax:success", o.kfmodal.AJAX_FAIL = "kfmodal:ajax:fail", o.kfmodal.AJAX_COMPLETE = "kfmodal:ajax:complete", o.fn.kfmodal = function(t) {
        return 1 === this.length && new o.kfmodal(this, t), this
    }, o(i).on("click.kfmodal", 'a[rel~="kfmodal:close"]', o.kfmodal.close), o(i).on("click.kfmodal", 'a[rel~="kfmodal:open"]', function(t) {
        t.preventDefault(), o(this).kfmodal()
    })
});