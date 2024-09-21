export default (options) => {

    return `
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
};
