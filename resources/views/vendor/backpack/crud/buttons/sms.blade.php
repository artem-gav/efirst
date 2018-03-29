<form class="form" action="{{ route('sms') }}" method="post">
    <input type="hidden" name="email" value="{{ $email }}">
    <button type="submit" class="btn btn-xs btn-default"><i class="fa fa-comment-o"></i> Send sms</button>
</form>