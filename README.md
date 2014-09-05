CustomWoocommerceEmail
======================

Send custom email templates to a customer through WooCommerce's admin panel

# The problem this solves

If you need to send a custom email template manually to a customer, this is for you! The way it's set up, it's a customer invoice where you can add additional content before the order information.

For my specific use case, I eventually went with WooCommerce's <a href="http://www.woothemes.com/products/follow-up-emails/">Follow Up Emails plugin</a> to automate the custom email after a purchase, but I'm making this solution available for anyone who wants to manually send a custom email to a purchaser and doesn't want to pay $100 for Follow Up Emails. (Though it is awesome, by the way!)

# What this is

This is a customization involving a plugin, inspired by SkyVerge's post on <a href="http://www.skyverge.com/blog/how-to-add-a-custom-woocommerce-email/">http://www.skyverge.com/blog/how-to-add-a-custom-woocommerce-email/, with the following modifications:
<ul>
	<li>Added ability to send the email through the order admin meta box</li>
	<li>Removed automation with shipping</li>
</ul>

How to use
==========
<strong>You must make sure the folder structure is correct!</strong> Otherwise WooCommerce can't pick it up.

## Setup
The "woocommerce" folder needs to go into your child theme folder. If you are customizing WooCommerce in your child theme already, just add the files inside to your already-existing folder.

The "woocommerce-add-custom-email" folder should go into your plugins folder and be activated through the WordPress admin.

<strong>Note:</strong> The plugin and this system will only handle one custom email template at a time. If you need to add more, you'll need to make additional email classes (copy and paste lines 16-33 of the plugin and change the names there, as well as add the new template IDs on line 38). You will also have to make additional PHP email class files within the plugin's "includes" folder with each new template. I have not tested this myself, but that's how it should work. If you're reading this on GitHub, you probably know what to do. :) I will get into the different references in detail, in a blog post soon.

## Customized emails
The PHP template files in the "woocommerce" folder were copied over from WooCommerce's customer invoice email templates, so this is essentially what they are. I've added a section where it's obvious where to add your custom HTML.

