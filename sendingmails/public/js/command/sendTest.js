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
                 <form method="POST" action="{{ route('create_campaign') }}">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <select class="js-example-basic-multiple form-control" multiple ="multiple" name="sendto[]">
                                    ${options}</option>
                                </select>
                                <x-input-error :messages="$errors->get('contract_statue_id')" class="mt-2" />
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="from_name" class="form-label">From Name</label>
                                <input type="from_name" class="form-control" id="from_name" name="from_name"
                                    autocomplete="current-from_name">
                                <x-input-error :messages="$errors->get('from_name')" class="mt-2" />
                                <div id="emailHelp" class="form-text">Name will display on your email.</div>
                            </div>
                            <div class="mb-3">
                                <label for="from_email" class="form-label">From Email</label>
                                <input type="from_email" class="form-control" id="from_email" name="from_email"
                                    autocomplete="current-from_email">
                                <x-input-error :messages="$errors->get('from_email')" class="mt-2" />
                                <div id="emailHelp" class="form-text">Email will display on your email.</div>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="subject" class="form-control" id="subject" name="subject"
                                    autocomplete="current-subject">
                                <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                                <div id="emailHelp" class="form-text">Subject will display on your email.</div>
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Text Privew</label>
                                <input type="text" class="form-control" id="text" name="text"
                                    autocomplete="current-text">
                                <x-input-error :messages="$errors->get('text')" class="mt-2" />
                                <div id="emailHelp" class="form-text">Text will display on your email.</div>
                            </div>
                           
                            <x-primary-button class="btn btn-primary w-100 py-8 fs-4 mb-4">
                                Send
                            </x-primary-button> 
                        </form>
            `;
            // Lỗi chưa ăn select2 ở modal
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });

            // Mở modal với nội dung đã tạo
            editor.Modal.open({
                title: "Send Test", // string | HTMLElement
                content: modalContent,
            });
        },
        stop: () => {},
    });
};