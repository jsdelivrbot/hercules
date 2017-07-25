# Hercules
##### A lightweight frontend framework

# Set up

Download and install node if you don't already have it:

https://nodejs.org/en/download/


Clone this repo and install the following packages:

**1 - Node package manager**

`npm install npm@latest -g`

**2 - Gulp**

`npm install --global gulp-cli`

`npm install --save-dev gulp`

**3 - SASS**

`npm install gulp-sass --save-dev`

**4 - Critical CSS**

What is critical css? Critical extracts & inlines critical-path (above-the-fold) CSS from HTML for faster rendering.


`npm install --save critical`

**5 - SVGO**

`npm install -g svgo`

---

# SCSS directory structure (WIP)

```
-- components
|   -- accordion
|   -- avatars
|   -- banners
|   -- buttons
|   -- cards
|   -- coachmarks
|   -- forms
|   -- modals
|   -- pagination
|   -- tables
|   -- tabs
|   -- tooltips
-- patterns
|   -- cards
|   -- item tile
|   -- navigation
|   -- racks
-- critical
|   -- base
|       -- reset
|       -- grid
|       -- typography
|   -- vars
|       -- color
|       -- icons
|       -- type
```

# Writing SCSS + HTML

We use a loose mixture of BEM (Block Element Modifier) and OCSS (Object Oriented Cascading Stylesheets)

Example of BEM in CSS
```
.button { } /* Block component */
.button__primary {} /* Element that depends upon the block */
.button--circular {} /* Modifier that changes the style of the block */
```

## SCSS property ordering

```
@include / @extend
display / visibilty / opacity
position
clear / float / overflow
background
width / height
margin / padding
borderbox-*
color
font-*
line-height/text-*
content (for :before / :after only);
@media #{media-query} {
    // same order as above sans @include/@extend as they are not supported.
};
```