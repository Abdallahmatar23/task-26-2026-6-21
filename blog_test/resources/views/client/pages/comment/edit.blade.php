<form method="POST" action="{{ route('comment.update', $comment->id) }}" class="comment-form">
    @csrf
    @method('PUT')

    <h3>Edit Comment</h3>

    <textarea name="comment" placeholder="Edit your comment..." >
{{ $comment->content }}
    </textarea>

    <div class="row">
        <div>
            <input name="name" type="text" value="{{ $comment->user->name }}" placeholder="Your Name" >
        </div>
        <div>
            <input name="email" type="email" value="{{ $comment->user->email }}" placeholder="Your Email" >
        </div>
    </div>

    <button type="submit">Update Comment</button>
</form>






<style>
    .comment-form {
        max-width: 600px;
        margin: 40px auto;
        padding: 25px;
        border: 1px solid #ddd;
        border-radius: 10px;
        background: #f9f9f9;
        font-family: Arial, sans-serif;
    }

    .comment-form h3 {
        text-align: center;
        margin-bottom: 20px;
    }

    .comment-form textarea,
    .comment-form input {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
    }

    .comment-form .row {
        display: flex;
        gap: 10px;
    }

    .comment-form .row div {
        flex: 1;
    }

    .comment-form button {
        margin-top: 15px;
        width: 100%;
        padding: 10px;
        background: #28a745;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 16px;
    }

    .comment-form button:hover {
        background: #1e7e34;
    }
</style>
