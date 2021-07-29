About .Bun
==========

I'd been wanting to make a little website from scratch to teach myself
about raw components of the web. I wanted more than static HTML, so I
figured I'd throw in some php as well. As for the domain name? ...this
was a result of a fun train of thought. I was thinking about the
slashdot name, and how is was chosen because of how it sounds when said
out-loud (ach tee tee pee colon slash slash slash dot dot com), so I
went looking around to see if any other fun "dot" domains were open.

The first one I found was dotbun.com. I just had to come up with
something to put on it...

Since 'bun' is often used to refer to especially cute rabbits, I decided
to grab some rabbit images and show them randomly.I added a static link
creator and refresh button, and most recently added embedded mp4/webms.
This is still a work in progress, so expect to see changes from time to
time.

Some Nerd Stuff
---------------

When you load the main page, a JavaScript FETCH request is made to an AWS API Endpoint. This selects a random object from an S3 bucket and returns a pre-signed URL to it, which is then set as the `src` element of the main image on the page.
The static portions of the site (html/css/some SVGs) are hosted using AWS S3 Static Hosting.

To-Do List
----------

-   Partial Content Refresh (just reload the picture, not the whole page)
-   CloudFront CDN integration
-   Video Support
-   Image Optimization Preprocessing
-   Backward/Forward Navigation
-   More Bunny Pictures!

Data Management
---------------

The website dotbun.com has no ads, and is not monitized. I use
[GoatCounter](https://dotbun.goatcounter.com) to keep track of basic
stats, but these stats are completely anonymized and do not follow you
off this site. To quote the developer of GoatCounter:

> To give a real-world analogy: it just counts how many people are
> entering your shop through which door. What it doesn’t do is then
> follow those people after they’ve left your store to see which other
> stores they visit, snoop on as much personal details as possible, and
> create a profile based on that. That’s what tracking is, and is just
> not the same thing as what GoatCounter is doing.

### Takedowns

If you see a piece of media that belongs to you, and you don't want it
on this website, please copy the *static link* and send it to

\[Turn on JavaScript to see the email address\]

. If you are a reddit user, you can also send me your username and I
will blacklist it if you so desire. Please note that improving this
process is something I'm actively working on.

```
  /) /) 
( \^.\^ ) 
C(") (")
```
