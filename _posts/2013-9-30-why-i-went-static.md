---
layout: post
title: Why I Went Static
published: true
---
When I first launched this site late last year, it was based on WordPress and I was feeling pretty good about it. I had a fairly standard workflow - an installation of MAMP to provide me with a local environment and an FTP client to update the public site once I was happy with the change I was making.

But after hearing about Jekyll, a static site generator with the ability to easily create a blog, I began to consider that WordPress was perhaps a tad far fetched for my very modest needs.

So I made the move to Jekyll and I haven't looked back since. The move was painless as most of the PHP tags used to tap into the WordPress codex could simply be replaced with corresponding Liquid syntax for Jekyll. Admittedly, I had few blog posts to import and this likely alleviated much of the potential effort.

But by far, the best thing has been the ability to host the site on GitHub and make use of Git version control. I can easily track every single change made to the code before it's committed to the site in a way that FTP just couldn't provide. And I know longer leave open the temptation of editing code live via FTP (an epic mistake every time).

It's been great to get away from the misery of databases as well. If I want to view the site locally on another computer, all I need to do is install Jekyll and run <code> jekyll serve --watch</code> and I'm away.

Just to clarify, I am still a huge fan of WordPress and still use it regularly in my work. As a platform, it's really powerful. But I don't need a platform to build something so simple as this blog. That's why I went static.