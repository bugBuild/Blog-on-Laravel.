# Blog-on-Laravel.
I made this blog using Laravel.

I don't spend many time creating front-end, because I used bootstrap framework.

I created two MySQL tables (usersSimple, posts).

In usersSimple I stored username and hashed password(Illuminate\Support\Facades\Hash) of every ueser.
In posts I stored title, subject and text of every post.

I made login-session using common cookies:
When you submit login form, site check enterd password hash and hash from DB(Hash:ckeck).
And then, if password equal site make cookie with username.
