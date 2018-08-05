/*!
 * img-upload v1.0.1 (https://github.com/egonolieux/img-upload)
 * Copyright 2016 Egon Olieux
 * Released under the MIT license
 */

(function($) {
    var options = {
        allowedFormats: [ "jpg", "png", "gif" ]
    };

    $.fn.imgUpload = function(opts) {
        if (this.filter("div").hasClass("img-upload")) {
            options = $.extend(options, opts); 
            bindEvents(this);
        }
        return this;
    };

    function getHtmlErrorMsg(msg) {
        return "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'><span>&times;</span></button>" + msg + "</div>";
    }

    function getHtmlImg(src) {
        return "<img src='" + src + "' alt='Image preview' class='img-thumbnail'>";
    }

    function isValidImgUrl(url, callback) {
        var img = new Image();
        img.onerror = function() { callback(url, false, "URL does not refer to an image."); };
        img.onload =  function() {
            var fileExt = url.substring(url.length - 3).toLowerCase();
            if ($.inArray(fileExt, options.allowedFormats) > -1) {
                callback(url, true, "");
            }
            else {
                callback(url, false, "Image format not allowed.");
            }
        };
        img.src = url;
    }

    function bindEvents($imgUpload) {    
        $imgUpload.find(".img-file-btn a").click(function() {
            showFileTab($(this).parent());
        });
        var $fileTab = $imgUpload.find(".img-file-tab");
        $fileTab.find(".img-select-btn").change(function() {
            selectImgFile($(this));
        });
        $fileTab.find(".img-remove-btn").click(function() {
            removeImgFile($(this));
        });  
        $imgUpload.find(".img-url-btn a").click(function() {
            showUrlTab($(this).parent());
        });
        $imgUpload.find(".img-url-tab .img-select-btn").click(function() {
            selectImgUrl($(this));
        });
    }

    function showFileTab($fileBtn) {
        if (!$fileBtn.hasClass("active")) {
            var $imgUpload = $fileBtn.closest(".img-upload");
            var $urlTab = $imgUpload.find(".img-url-tab");

            $fileBtn.addClass("active");
            $imgUpload.find(".img-file-tab").show();
            $imgUpload.find(".img-url-btn").removeClass("active");
            $urlTab.hide();

            $urlTab.find(".alert").remove();
            $urlTab.find("input").val("");
            $urlTab.find(".img-select-btn").text("Submit");
            $urlTab.find("img").remove();
        }
    }

    function selectImgFile($selectBtn) {
        var $input = $selectBtn.find("input");
        var $fileTab = $selectBtn.closest(".img-file-tab");
        var hasFile = $input[0].files && $input[0].files[0];
        $fileTab.find(".alert").remove();

        if (!hasFile) {
            $fileTab.prepend(getHtmlErrorMsg("Error uploading file."));
            return;
        }

        var file = $input[0].files[0];
        var fileExt = file.name.substring(file.name.length - 3).toLowerCase();

        if ($.inArray(fileExt, options.allowedFormats) > -1) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $fileTab.find("img").remove();
                $fileTab.append(getHtmlImg(e.target.result));
            };
            reader.onerror = function(e) {
                $fileTab.prepend(getHtmlErrorMsg("Error uploading file."));
            };
            reader.readAsDataURL(file);

            $selectBtn.find("span").text("Change");
            $fileTab.find(".img-remove-btn").css("display", "inline-block");
        }
        else {
            $fileTab.prepend(getHtmlErrorMsg("Image format not allowed."));
        }
    }

    function removeImgFile($removeBtn) {
        var $fileTab = $removeBtn.closest(".img-file-tab");
        $fileTab.find(".alert").remove();
        $fileTab.find(".img-select-btn span").text("Browse");
        $fileTab.find("input").val("");
        $fileTab.find("img").remove();
        $removeBtn.hide();
    }

    function showUrlTab($urlBtn) {
        if (!$urlBtn.hasClass("active")) {
            var $imgUpload = $urlBtn.closest(".img-upload");
            var $fileTab = $imgUpload.find(".img-file-tab");

            $urlBtn.addClass("active");
            $imgUpload.find(".img-url-tab").show();
            $imgUpload.find(".img-file-btn").removeClass("active");
            $fileTab.hide();

            $fileTab.find(".alert").remove();
            $fileTab.find("input").val("");
            $fileTab.find(".img-select-btn span").text("Browse");
            $fileTab.find(".img-remove-btn").hide();
            $fileTab.find("img").remove();
        }
    }

    function selectImgUrl($selectBtn) {
        var $urlTab = $selectBtn.closest(".img-url-tab");
        var $input = $urlTab.find("input");
        $urlTab.find(".alert").remove();

        if ($selectBtn.text() == "Remove") {
            $input.val("");
            $selectBtn.text("Submit");
            $urlTab.find("img").remove();
            return;
        }

        isValidImgUrl($urlTab.find("input:text").val(), function(url, isValid, msg) {
            if (isValid) {
                $urlTab.find("input:hidden").val(url);
                $urlTab.find("img").remove();
                $urlTab.append(getHtmlImg(url));
                $selectBtn.text("Remove");
            }
            else {
                $urlTab.prepend(getHtmlErrorMsg(msg));
            }
        });
    }
}(jQuery));
