Akun Anda Nonaktif, Silahkan <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Kembali Ke Halaman Login</a>    
<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
	{{ csrf_field() }}
</form>