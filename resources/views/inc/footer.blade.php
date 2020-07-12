<div class="clearfix pt-5"></div>

<div class="footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
            <p class="mb-4"><img src="{{ asset('site-html/images/logo.png') }}" alt="Image" class="img-fluid"></p>
            </div>
            <div class="col-lg-6">
                <h3><span class="title-footer">{{ $contact->name }}</span></h3>
                <p>{{ $contact->address }}</p>
                <p>โทรศัพท์ {{ $contact->tel }}<br>
                    อีเมล: <a href="mailto:{{ $contact->email }}" class="mail">{{ $contact->email }}</a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row black-bg m-0">
    <div class="container">
        <p>Copyright &copy; 2020 All rights reserved</p>
    </div>
</div>
