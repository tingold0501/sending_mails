export function sendXMLRequest(method,url) {
    const xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
            console.log(xmlHttp.responseText);
        }
        else if (xmlHttp.readyState == 4 && xmlHttp.status == 400) {
            console.error("Error:", xmlHttp.responseText);
        }
    }
    xmlHttp.open(method, url, true);
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    xmlHttp.setRequestHeader("X-CSRF-TOKEN", csrfToken);
    xmlHttp.send(xml);
}
export default sendXMLRequest;