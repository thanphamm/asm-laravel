@extends('layout')
@section('post')
<div class="col-lg-8">

    <h3>Gửi tin nhắn cho chúng tôi</h3>

    <!-- Contact Form -->
    <form action="lienhe" method="post" class="contact-form mt-30 mb-30">
    {{csrf_field()}}
        <div class="contact-name">
            <label for="name">Tên của bạn <abbr title="required" class="required">*</abbr></label>
            <input name="name" type="text">
        </div>
        <div class="contact-email">
            <label for="email">Email <abbr title="required" class="required">*</abbr></label>
            <input name="email" type="email">
        </div>
        <div class="contact-message">
            <label for="message">Tin nhắn <abbr title="required" class="required">*</abbr></label>
            <textarea name="message" rows="7" required="required"></textarea>
        </div>

        <input type="submit" name="submit" class="btn btn-lg btn-color btn-button" value="Gửi Tin Nhắn">
        <div class="message"></div>
    </form>

</div>
@endsection