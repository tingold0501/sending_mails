// // import Swal from 'https://cdn.jsdelivr.net/npm/sweetalert2@11';
// import Swal from 'sweetalert2';
// export function beforeUnLoad(editor, config){
//     let isDirty = false; // Biến để kiểm tra xem có thay đổi nào không

//     // Đánh dấu editor là "dirty" (có thay đổi)
//     editor.on("update", () => {
//         console.log("Editor updated");
//         isDirty = true; // Khi editor có thay đổi, đặt cờ thành true
//     });

//     window.addEventListener("beforeunload", (event) => {
//         // Nếu không có thay đổi thì không cần hiển thị cảnh báo
//         if (!isDirty) return;

//         // Hiển thị cảnh báo chuẩn của trình duyệt (bắt buộc phải có)
//         event.preventDefault();
//         // event.returnValue = '';

//         // Hiển thị SweetAlert để xác nhận
//         Swal.fire({
//             title: 'Bạn có muốn lưu thay đổi?',
//             text: "Bạn có thay đổi chưa được lưu, bạn có chắc muốn thoát không?",
//             icon: 'warning',
//             showCancelButton: true,
//             confirmButtonText: 'Thoát',
//             cancelButtonText: 'Ở lại'
//         }).then((result) => {
//             if (result.isConfirmed) {
//                 isDirty = false; // Cho phép thoát nếu người dùng xác nhận
//                 window.removeEventListener("beforeunload", () => {}); // Bỏ sự kiện trước khi chuyển hướng
//                 // window.location.href = '/your-destination'; // Đường dẫn trang muốn chuyển
//             }
//         });
//     });
// };
import {sendXMLRequest} from "../events/sendXMLRequest.js";
import {url,emailTemplateStore} from "../consts.js";
export default (editor, config) => {
    editor.on("update", () => {
        console.log("Editor loaded");
        window.addEventListener("beforeunload", (event) => {
            event.preventDefault();
            const message = window.confirm("Are you sure you want to leave this page?");
            if (message) {
                sendXMLRequest("POST",url + emailTemplateStore); 
            }
            else{
                console.log("cancel");
            }
        });
    });
}