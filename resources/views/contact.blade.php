@extends('layout')

@section('main')
    <form method="POST">
        @csrf
    <div class="mb-3" >
        <label class="form-label">İsminiz</label>
        <input type="text" class="form-control {{ in_array('name', $errors->keys()) ? 'is-invalid' : '' }}" name="name" value="{{ old('name') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control {{ in_array('email', $errors->keys()) ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Konu</label>
        <select name="subject" class="form-select {{ in_array('subject', $errors->keys()) ? 'is-invalid' : '' }}" aria-label="Default select example">
            @foreach($konular as $konu)
                <option {{ ($konu == old('subject') ? 'selected' : '') }}>{{ $konu }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Mesajınız</label>
        <textarea name="message" class="form-control {{ in_array('message', $errors->keys()) ? 'is-invalid' : '' }}" rows="3">
            {{ old('message') }}
        </textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Mesajı Gönder</button>
    </div>
    </form>
@endsection
