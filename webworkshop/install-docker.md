---
layout: single
classes: wide
title: Install Docker and Docker Compose
sidebar:
    nav: "webworkshop"
---
Official installation instrutions are [here](https://docs.docker.com/get-docker/).

If you are using NixOS, just add
{% highlight nix %}
virtualisation.docker.enable = true;
{% endhighlight %}
to your system configuration and rebuild.
