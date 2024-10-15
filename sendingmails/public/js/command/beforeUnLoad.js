import { url } from "../consts.js";
export function beforeUnLoad(editor, config) {
    console.log("Before unload");
    Swal.fire({
        title: "Do you want to save the changes?",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: "Save",
        denyButtonText: `Don't save`,
    }).then((result) => {
        if (result.isConfirmed) {
            var body = editor.getHtml();
            var css_text = editor.getCss();
            var variable_keys = localStorage.getItem("variable_keys");
            const xml = new XMLHttpRequest();
            xml.onreadystatechange = function () {
                if (xml.readyState == 4 && xml.status == 200) {
                    window.location.reload();
                    localStorage.removeItem("variable_keys");
                } else if (xml.readyState == 4 && xml.status == 400) {
                    console.error("Error:", xml.responseText);
                }
            };

            const formData = new FormData();
            formData.append("body", body);
            formData.append("css_text", css_text);
            formData.append("variable_keys", variable_keys);

            xml.open("POST", url + "email-template-store");
            const csrfToken = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");
            xml.setRequestHeader("X-CSRF-TOKEN", csrfToken);

            xml.send(formData);
            Swal.fire("Saved!", "", "success");
            window.location.replace('/user-dashboard');
        } else if (result.isDenied) {
            Swal.fire("Changes are not saved", "", "info");
        }
    });
}
