# tna-base child theme template

This should be used when creating new child themes for tna-base

### 1.0 Clone Github repository 'tna-child-web-archive' using SourceTree

Click 'Remote' in SourceTree and you will be shown a full list of repositories you have access to. Then:

* Create a folder called 'tna-child-web-archive' in the Themes directory of your WordPress installation where 'tna-base' parent theme sits
* Select the 'tna-base-child-template' repository in SourceTree and clone it to your newly created 'tna-base-child-template' directory

### 1.1 Create your child theme from 'tna-base-child-template'

* Create a folder in the Themes directory of your WordPress installation where 'tna-base' parent sits and give it a name
* Use the naming convention, 'tna-child-...'
* Copy the files inside 'tna-base-child-template' into your new child theme folder

#### 1.2.1 Adding new repository to Travis CI

Log into your Travis CI account and navigate to The National Archives organisation. Here you will be able to add the repository to Travis CI. 

### 1.3 Create a new project for the WordPress installation in PhpStorm

* Select 'Create New Project from Existing Files'
* Select 'Web server is installed locally, source files are located under its document root'
* Set /Applications/MAMP/htdocs/sites/tna-base-dev/wp-content/themes/tna-child-web-archive and click 'Project Root'
* Specify parameters for a new server as:
  * Name: tna-child-web-archive
  * Web server root URL: http://tna-base:8888
  * Set Project URL as: http://tna-base:8888

### 1.4 Installing dependencies

This repository is configured to allow for easy integration with Travis CI (Continuous Integration).

#### 1.4.1 Obtaining dependencies via Composer

Having followed the steps above you will be able to install dependencies by typing ```composer install``` at the Terminal.

#### 1.4.2 Obtaining dependencies via NPM

Type ```npm install``` to obtain Node dependencies

### 1.5 Running PHPUnit

Having followed the steps under 'Obtaining dependencies via Composer' type ```vendor/bin/phpunit -c phpunit.xml``` from within the tna-base directory to run Unit Tests for the project.

Note: PhpStorm allows for PHPUnit integration - allowing your tests to be run automatically. Search the JetBrains website to find out how to configure this.

### 1.6 Running Jasmine tests

Having obtained the dependencies you can type ```grunt jasmine``` to run JavaScript tests

## Updating the pages
These are instructions on how to update the all pages.

### 1.1 Landing Page
When in wordpress the landing page is using our standard templates called `Level 1 landing` which is available in the drop down underneath the `Page Attributes` section.
 
### 1.2 Browse A - Z
This page uses the standard 'default template'.

This theme comes featured with a shortcode, an editor can add a short snippet `[a-z]` to generate a list of buttons ranging from A-Z and 0-9.

In order to update the page with the links, please follow the steps below.

####Step 1
Before updating anything in wordpress, please make sure you have cleared up your list items by checking the prerequisites below.
Go to a-z excel sheet. `Objective ID: A3904942`
2. Choose the A-Z tab
3. Select and copy 1st column
4. Paste in Notepad++ or similar text editor that can handle `Regular Expression`.
5. Bring the cursor to line one by typing `Control + Home`.
6. `Ctrl+F`
7. Select the Replace tab.
8. In the first text field type: `<!--.*?-->`, ensure there is a space after the regex. 
9. Leave the second text field blank.
10. At the bottom of the Replace window, select Regular Expression.
11. Select `Replace All`.

By now you should have a clean `HTML` to be pasted into wordpress which looks like this
```HTML
<li><a title="This link opens in a new window" href="http://webarchive.nationalarchives.gov.uk/*/http://www.abilityvability.co.uk/" target="_blank" rel="noopener noreferrer">Ability v Ability</a></li>
<li><a title="This link opens in a new window" href="http://webarchive.nationalarchives.gov.uk/*/http://www.aboutmyvote.co.uk/" target="_blank" rel="noopener noreferrer">About My Vote</a></li>
<li><a title="This link opens in a new window" href="http://webarchive.nationalarchives.gov.uk/*/https://academyschools.blog.gov.uk/" target="_blank" rel="noopener noreferrer">Academies and free schools - GOV.UK Blog</a></li>
<li><a title="This link opens in a new window" href="http://webarchive.nationalarchives.gov.uk/*/http://virtual.nationalschool.gov.uk/AJC/Pages/HomePage.aspx" target="_blank" rel="noopener noreferrer">Academy for Justice Commissioning (http://virtual.nationalschool.gov.uk/AJC/Pages/HomePage.aspx)</a></li>
```

####Step 2
Go to the page where you have the a-z list, create a your `HTML` blocks for each letter/alphabet as list below.
```HTML
<h2>A</h2>
<ul>
    <!-- paste li items starting with 'A' here -->
</ul>

<h2>B</h2>
<ul>
    <!-- paste li items starting with 'B' here -->
</ul>
```

***Note

Please follow all steps correctly for the A-Z or some of the functionality will not work such as the jump links.
Also if something is not aligned properly, please check for any missed or closed tags or contact someone from the web team.

*Eg.*

If a list is indented there could be a possibility that a `<ul>` tag could be missing at the beginning, or a `</ul>` could be missing at the end of the list.