@include('front-end.layouts.button')
<form action="{{ route('cart.add') }}" id="data-form-add-to-cart" method="POST">
  {{ csrf_field() }}
  <input id="qty" type="number"  name="qty" value="1" min="1" max="100" hidden>
  <input id="data-input-add-to-cart" type="text"  name="txtBookId" value="" hidden min="1" max="100">
</form>
<footer class="page-footer" >
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Bởi vì sách là thế giới</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">Trường Đại học Công nghệ Thông tin</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Khoa Hệ thống Thông tin</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">IS207</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Phát triển ứng dụng Web</a></li>
        </ul>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Giới thiệu</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">About me</a></li>
          <br>
          <li><a class="grey-text text-lighten-3" target ="_blank" href="https://github.com/STARTALLOMEN">Project on Github</a></li>
          <script src="https://apis.google.com/js/platform.js"></script>

        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © {{date("Y")}} Boko Bookstore
    <a class="grey-text text-lighten-4 right" title="Click to get information" target="_blank" >Liên hệ với chúng tôi</a>
    </div>
  </div>
</footer>