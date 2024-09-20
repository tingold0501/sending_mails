import { cmdSend, urlApi } from "../consts.js";

export default (editor, config) => {
    editor.Commands.add(cmdSend, {
        run() {
            // Tạo các option cho select từ biến emails
            let options = '';
            contract.forEach(item => {
                options += `<option value="${item.id}">${item.email}</option>`;
            });

            // Tạo chuỗi HTML cho modal với CSS nội tuyến
            const modalContent = `
                 <form id="emailForm">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <select class="js-example-basic-multiple form-control" multiple="multiple" name="sendto[]">
                            ${options}
                        </select>
                        <x-input-error :messages="$errors->get('contract_statue_id')" class="mt-2" />
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="from_name" class="form-label">From Name</label>
                        <input type="text" class="form-control" id="from_name" name="from_name" autocomplete="current-from_name">
                        <x-input-error :messages="$errors->get('from_name')" class="mt-2" />
                        <div id="emailHelp" class="form-text">Name will display on your email.</div>
                    </div>
                    <div class="mb-3">
                        <label for="from_email" class="form-label">From Email</label>
                        <input type="email" class="form-control" id="from_email" name="from_email" autocomplete="current-from_email">
                        <x-input-error :messages="$errors->get('from_email')" class="mt-2" />
                        <div id="emailHelp" class="form-text">Email will display on your email.</div>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" autocomplete="current-subject">
                        <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                        <div id="emailHelp" class="form-text">Subject will display on your email.</div>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Text Preview</label>
                        <input type="text" class="form-control" id="text" name="text" autocomplete="current-text">
                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                        <div id="emailHelp" class="form-text">Text will display on your email.</div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4">Send</button>
                </form>
            `;

            // Mở modal với nội dung đã tạo
            editor.Modal.open({
                title: "Send Test", // string | HTMLElement
                content: modalContent,
            });

            // Khởi tạo select2 sau khi modal đã được render
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });

            // Xử lý form submit qua XMLHttpRequest
            const form = document.getElementById('emailForm');
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Ngăn chặn hành vi submit mặc định

                // Tạo formData để gửi dữ liệu
                const formData = new FormData(form);

                // Tạo XMLHttpRequest để gửi yêu cầu API
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'http://localhost/create_campaign', true);
                
                // Đảm bảo rằng Laravel sẽ xử lý được CSRF token
                xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

                xhr.onload = function () {
                    if (xhr.status >= 200 && xhr.status < 300) {
                        const response = JSON.parse(xhr.responseText);
                        console.log('Success:', response);
                        alert('Email sent successfully!');
                        editor.Modal.close(); // Đóng modal khi gửi thành công
                    } else {
                        console.error('Error:', xhr.responseText);
                        alert('An error occurred while sending the email.');
                    }
                };

                xhr.onerror = function () {
                    console.error('Request failed');
                };

                // Gửi form data
                xhr.send(formData);
            });
        },
        stop: () => {},
    });
};