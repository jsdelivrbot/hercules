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

# SCSS directory (WIP)

```
-- components
|   -- accordion
|   -- avatars
|   -- banners
|   -- badgesr
|   -- buttons
|   -- cards
|   -- coachmarks
|   -- forms
|   -- modals
|   -- pagination
|   -- tables
|   -- tabs
|   -- tooltips
|   -- ""
-- patterns
|   -- cards
|   -- item tile
|   -- navigation
|   -- racks
|   -- ""
-- critical
|   -- base
|       -- reset
|       -- grid
|       -- typography
|   -- vars
|       -- color
|       -- icons
|       -- media queries
|       -- mixins / placeholder
|       -- type
-- view
|   -- view critical
|   -- view nont critical
```

# SCSS and BEM

We use a loose mixture of BEM (Block Element Modifier) and OO(S)CSS (Object Oriented Cascading Stylesheets)

####Example of BEM in SCSS
```scss

// block
.btn {

  // element that depends on the block
  &__primary { }

  // modifiuer that changes the style of the block
  &--circular { }
}
```


####Formatting
* Lines break between each rule declaration
* Dashes over camelCasing
* Do not use ID selectors
* Space after `:`
* Line break
* Use `//` for comments
* Comments should be on their own lines above declarations

#####Example

```scss
    // -- Good

    // global btn style

    .btn {
      // styles

      &--small {
        padding: 15px 20px;
      }

      &--circular,
      &--radius {
        border-radius: 50px;
      }
    }

    // -- Bad

    .btn {

      &--SmallBtn {
        padding:15px20px;
      }

      &.Circular, &.radius {
        padding:15px 20px;
      }
    }


```


####Property ordering

```
@include / @extend
display / visibilty / opacity
position - TRBL
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

#####Example

```scss

    // -- Good

    .btn {
      @include border-radius(50px);
      display: block;
      position: absolute;
      top: 15px;
      right: 15px;
      bottom: 0;
      left: 15px;
      background: $black;
      margin: 20px;
      padding: 20px;
      color: $grey-500;

      @media #{$medium-up} {
        display: none;
      }
    }

    // -- Bad

    .btn {
      display: block;
      top: 15px;
      background: $black;
      left: 15px;
      right: 15px;
      padding: 15px;
      margin: 20px;
      bottom: 0;
      position: absolute;
      color: $grey;

      @media #{$medium-up} {
        display: none;
      }

      @include border-radius(50px);
    }

```