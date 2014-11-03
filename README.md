NCS-Object-Script-Fiddle
========================

Just a simple concept for a "fiddle" site like Codepen.io and jsfiddle.net but for NEWSCYCLE Digital code

## Live Example 

You can see a live example of this here: 

http://swdev.tc1.dc.publicus.com/section/objectscript_fiddle

## Usage 

Right now you can only use it to parse NEWSCYCLE Digital's Object Script. For example, you can display the current date like so:

<%currentdate$d("mm-dd-yyyy")%>

Running the above will output: 

06-18-2014

## How does it work? 

* When you visit the site for the first time, buildFiddle.php5 script will write an object file to a sub folder in the Object folder and the name for it will be set to your NEWSCYCLE Digital session id. 

* Everything written in the left box will be written to your Object file. The Object file is called on a output_ovr.pbs page which is then inserted into the right box. Ofcourse, the updateFiddle.php5 script updates the fiddle as you enter in more information. 
* 
## To-do 

* Make it so Newslist, Contentlist, and other tags can be generated on the file. 

* Make these tags be able to reference article data and other data

* Change the submit function so the input isn't submitted as soon as the enter key is hit. Make it so newlines could be generated and hitting a run button would submit the information instead.





