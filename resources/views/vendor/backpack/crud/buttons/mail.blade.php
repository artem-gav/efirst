<form class="form" action="{{ route('mail') }}" method="post">
    <input type="hidden" name="email" value="{{ $email }}">
    <button type="submit" class="btn btn-xs btn-default"><i class="fa fa-envelope-o"></i> Send mail</button>
</form>