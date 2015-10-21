FAIconFieldType
======================

Field Usage - 

```yaml
	icon:
  		type: faiconpicker
```

To change the placement use ´placement´ and to hide the field (for the inline picker for example) use ´hidden´.

```yaml
	icon:
  		type: faiconpicker
  		placement: inline
  		hidden: true
```

Font customisation.

```yaml
	icon:
  		type: faiconpicker
  		default: fa-adn # Choose the default selected icon.
  		component: false # true|false => Add a component to the left of the input and display the selected icon.
  		icon_root_class: fa # custom the root class for icon, allow use of others fonts, not only FA.
  		configs:
  			icons: ["fa-adjust", "fa-adn", "fa-align-center"] # limit to a set of icons
  			... # options available from the library.
```

For more options to use in `configs`, see [mjolnic/fontawesome-iconpicker](https://github.com/mjolnic/fontawesome-iconpicker).
