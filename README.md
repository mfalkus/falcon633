# falcon633 WordPress Theme

A non-fussy, simple, modern, mobile friendly WordPress theme.

A big shout-out to Huw at [Unfold Studio](http://unfoldstudio.com/) for all his help with this theme.

## Getting Started

The theme uses inuit.css, which is included as a submodule, so you'll need to ensure you pass the
`--recursive` flag when cloning the repository.

     git clone --recursive https://github.com/mfalkus/falcon633.git

Once cloned the only build step is to make the `style.css` file from the SASS source:

     sass --style compressed style.scss:style.css

Then you are all set! The theme should now be shown in the WordPress dashboard.

![falcon633 in action](https://raw.githubusercontent.com/mfalkus/falcon633/master/screenshot.png)
