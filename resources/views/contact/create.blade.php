<form action="{{ route('contact.store') }}" method="POST">
    <div class="mb-3">
        <input type="hidden" name="my_name" id="my_name" value="">
        <input type="checkbox" name="contact_me_by_fax_only" id="contact_me_by_fax_only" value="1" tabindex="-1" autocomplete="off" class="d-none">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{ old('name') }}">
        <div>{{ $errors->first('name') }}</div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email') }}">
        <div>{{ $errors->first('email') }}</div>
    </div>
    <div class="mb-3">
        <label for="subject" class="form-label">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" aria-describedby="emailHelp" value="{{ old('subject') }}">
        <div>{{ $errors->first('subject') }}</div>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea name="message" class="form-control" id="message" name="message" cols="30" rows="10">{{ old('message') }}</textarea>
        <div>{{ $errors->first('message') }}</div>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
    @csrf
</form>
