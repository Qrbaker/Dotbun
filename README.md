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

When you load the main page, a little php script selects a random file
name. If its a still image (png/jpg) it produces html that will attempt
to show a webp picture, with a fallback to the original format. I also
made the static links the original format, to make them more accessible
to hotlinking and sharing.

If its a gif, it displays it without fallback (since webp doesn't handle
moving images). If the random file is a video, it instead generates a
&lt;video&gt; tag that is set to maximum size without affecting aspect
ratio, centered in the screen. I use the tag &lt;video autoplay loop&gt;
for gif-like behavior.

I used media selectors to make the website somewhat responsive. If your
horizontal size is below a given limit, the static link and refresh
buttons are enlarged and moved from the corners to the top and bottom of
the page.

By opportunistically using webp, and relying on php pre-processing with
NO javascript, I got a 100 on both desktop and mobile according to
google's pageSpeed insights.

To-Do List
----------

-   Data Rights Handling
-   Upload page - allow submissions
-   Backward/Forward Navigation

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

<code>
  /) /) 
  
( \^.\^ ) 

C(") (")
</code>
