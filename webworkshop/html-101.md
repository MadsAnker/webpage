---
title: HTML 101 - The building blocks
layout: single
classes: wide
sidebar:
    nav: "webworkshop"
header:
    overlay_image: /assets/img/htmlstockphoto.jpg
    overlay_filter: 0.6
---
HTML is the language used to specify the structure of a webpage.
There exists many *elements* that we can use to annotate the content of a page according to how we want to content to be displayed.
Common elements include the ``a`` element which is used to represent links, the ``img`` element which is used to represent images and the ``p`` element which is used to represent paragraphs.
Elements are specified by using *tags*. 
There a opening and closing tags.
An opening tag is just the name of an element surrounded by "`<`" and "`>`", and the closing that is the same name surrounded by "`</`" and "`>`".
Between the opening and closing tags of an element can be other elements which we refer to as the *children* of the parent element.

Element can also have *attributes*.
Attributes are key-value pairs that control different aspects of the elements.
For example, we could use the `style` attribute (which is common to many element) of the `p` element to change the font size of the text like so:

{% highlight html %}
<p style="font-size: 24px;">Hello HTML!</p>
{% endhighlight %}

In [the previous step]({% link webworkshop/web-basics.md %}) we saw an example of some HTML elements when we created the sample page:

{% highlight html %}
{% include_relative sample-page.html %}
{% endhighlight %}

We should now be able to interpret the meaning of this.
Don't worry about the `<!DOCTYPE html>` tag on the first line. 
It's required for legacy reasons. Just put it at the top of any HTML page that you write.
You can read more about it [here](https://developer.mozilla.org/en-US/docs/Glossary/Doctype).
The other parts are more interesting.
First, there is the `html` element that surrounds the entire document.
This is referred to as the root element of the page and all other elements of the page must be descendants of this.

Next comes the `head` element.
This is where we place metadata about the HTML document such as the title and icon of the page.
It can also be used to include CSS and JavaScript so that we don't have to write everything in one document.

The last element in the example page is the `body` element.
This is where all the content to be displayed on the page should be placed.
Here, we just placed a single paragraph with the text "Hello HTML!".

## The elements

You will probably need to make pages that are more complex than this.
There are many resources available online on the different HTML elements. Here are two popular ones:

- [The MDN Web Docs](https://developer.mozilla.org/en-US/) is a collection of very comprehensive documentation on pretty much everything related to web development, including HTML, CSS, and JavaScript.
This is often the best place to find accurate and detailed information.
- [w3schools](https://www.w3schools.com/) has both tutorials and documentation available for HTML, CSS and JavaScript. This documentation is not as complete as MDN but is still okay as a quick reference tool.

Let's take a look at some common elements.

### The [\<div\>](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/div) element
The `div` element is probably the most commonly used element.
It is a generic container that we use to group element to make styling easier.
We will soon see why this can be convenient.

### The [\<input\>](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input) element
The input element is used to create interactive controls to receive input from the user.
The type of input we want to receive can be controlled with the `type` attribute.
We can take anything from passwords to files as input.

### The [\<form\>](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form) element
The form element is used to represent a *form* with controls for entering and *submitting* data.
For example, we could create a login screen with an input field for the username and passwords and a login button that submit the credentials to the server for validation.

## Building our app
With just these 3 elements. We can actually get quite far.
Let's start developing our application.

Start by changing `index.html` as follows:

{% highlight html %}
{% include_relative src/step1.html %}
{% endhighlight %}

The page should look like this:
![image-center]({% link /assets/img/step1.jpg %}){: .align-center}

See what happens if you enter "1" into the input field and press submit. You should see the URL change to `http://127.0.0.1/?guess=1`.
The site reloaded and now `?guess=1` appeared in the URL. How did that happen? And what does `?guess=1` mean?

`guess=1` is what we call a `GET` parameter. `GET` parameters are specified by adding a `?` to the end of a URL followed by a series of key-value pairs separated by `&`.
So `?guess=1` means that the `GET` parameter `guess` is set to `1`. 
The `guess` parameter was set because the `name` attribute of the `input` element in the form was set to `guess` and the request is a `GET` because the `method` attribute of the `form` element is `GET`.
The resource that we are requesting is `/` because the `action` attribute of the `form` is `/`.

Right now, this is not very useful. The `guess` parameter is not being used for anything, so it currently has no effect.
However, the server could use this parameter for something and this is in fact exactly what we will do when we get to writing the backend in PHP.
The idea is that the backend can use this parameter to check if the guess is correct and update our internet points accordingly.
We will see how to implement this when we get to PHP.

At the moment, our webpage looks very dull. Our users definitely won't be pleased with this look. 
Luckily, we can change this using [CSS]({% link webworkshop/css-101.md %})!
