# Use WordPress Playground for interactive demos

The code in this repository demonstrates how to use [WordPress Playground](https://playground.wordpress.net/) for interactive project handovers.

In this demo, we create a post that explains to the user how to update the data of a custom plugin.

## Themes

The [themes directory](/themes/) includes a customized copy of [Blue Note](https://wordpress.org/themes/blue-note/), a community theme developed by WordPress contributors.

## Plugins

The [plugins directory](/plugins/) includes a custom plugin used in the website:
**Meta Block Sidebar** (see [meta-block-sidebar](/plugins/meta-block-sidebar/readme.md)): a custom block that adds two custom meta fields (`team` and `joined`) specifying the person's team name and the date (Month, Year) they joined the company. In this example, we include the block in the [`single.html` template file](/themes/blue-note/templates/single.html), which displays it on every post*.

The demo also installs the community plugin [Create Block Theme](https://wordpress.org/plugins/create-block-theme/).

## Playground

We use [WordPress Playground](https://wordpress.github.io/wordpress-playground/) to run an in-browser instance of WordPress with the adapted _Blue Note_ theme and the plugin **already installed and activated**: [open the live demo we prepared](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/wptrainingteam/playground-demo-handover/main/playground/blueprint.json).

> [!TIP]
> The files that power the demo are in the [`playground` directory](/playground/). You can change the behavior by editing the Blueprint section [in `index.html`](/playground/index.html).