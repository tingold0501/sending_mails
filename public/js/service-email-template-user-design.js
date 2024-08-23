const url = "http://localhost/";

$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    console.log("ready!");
    save_database();
});

function save_database() {
    $("#btn_save").click(function (e) {
        var body = editor.getHtml();
        var css = editor.getCss();
        console.log("save!");
        console.log(body);
        console.log(css);
        $.ajax({
            url: url + "email_template_store",
            type: "POST",
            data: {
                body: body,
                css_text: css,
            },
            success: function (data) {
                console.log("success!");
                console.log(data);
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Template Saved!",
                    showConfirmButton: false,
                    timer: 1500
                  });
                setTimeout(() => {
                    window.location.href = url + "dashboard";
                }, 1000);
            },
        });
    });
}
