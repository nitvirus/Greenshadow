~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
This theme(Green-shadow) is an attempt to give back something to drupal.
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
The theme has mainly 9 regions named:
1. Header
2. Sub-Header
3. Content
4. Left-Sidebar
5. Right-Sidebar
6. Footer-Content-1
7. Footer-Content-2
8. Footer-Content-3
9. Footer

The logo is placed below the site name and slogan.
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
FOR DROP-DOWN MENUS
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
I have used Nice menus module for dropdown menus.
This module can be downloaded from:
http://drupal.org/project/nice_menus

For enabling the dropdown in the theme following 
steps are needed to be done:
1. In page.tpl.php: Replace the page.tpl.php 
with the page.tpl.php present 
in the "For DropDown Menu" Folder  
                                  or
uncomment theme_nice_menu_primary_links()
 function for dropdown on line number 58 
and theme_nice_menus_secondary_links() on line number 66
                     


2. Replace nice-menu.css and nice-menu-default.css with the same 
named files present in folder 
"For DropDown Menu"

3. *Important Please comment out the style:
     #primary{
        padding:0.3em 5px 0.5em 5px;
      }
    
     from style.css when nicemenu-dropdown is enabled.
