import { timeout } from "../consts.js";
export function sendXMLHttp(method,url, formData,page) {
    const xml = new XMLHttpRequest();
    xml.onreadystatechange = function () {
        if (xml.readyState == 4 && xml.status == 200) {
            console.log("Success:", xml.responseText);
            setTimeout(() => {
                window.location.replace(page);
            }, timeout);
        } else if (xml.readyState == 4 && xml.status == 400) {
            console.error("Error:", xml.responseText);
        }
    };
    xml.open(method, url);
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    xml.setRequestHeader("X-CSRF-TOKEN", csrfToken);
    xml.send(formData);
}