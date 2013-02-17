<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form reference - jQuery Mobile Demos</title>
    <link rel="stylesheet"  href="../../../css/themes/default/jquery.mobile.css">
    <link rel="stylesheet" href="../../_assets/css/jqm-demos.css">
    <link rel="shortcut icon" href="../../_assets/favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <script src="../../../js/jquery.js"></script>
    <script src="../../_assets/js/"></script>
    <script src="../../../js/"></script>
</head>
<body>
<div data-role="page" class="jqm-demos" data-quicklinks="true">

    <div data-role="header" class="jqm-header">
        <h1 class="jqm-logo"><img src="../../_assets/img/jquery-logo.png" alt="jQuery Mobile Framework"></h1>
        <a href="#panel-nav" class="jqm-navmenu-link" data-icon="bars" data-iconpos="notext">Navigation</a>
        <a href="#" class="jqm-search-link" data-icon="search" data-iconpos="notext">Search</a>
        <?php include( '../../search.php' ); ?>
    </div><!-- /header -->
    
    <div data-role="content" class="jqm-content">
    
        <h1>Forms</h1>
        
        
        <p class="jqm-intro">All form widgets begin with native form elements with rich HTML semantics that are enhanced to make them more attractive and finger-friendly.
        </p>
        
        <h2>Buttons</h2>
			
        <div data-demo-html="true">
            <a href="#" data-role="button">Link button</a>
            <input type="button" value="Button element" data-icon="delete" data-theme="b" />
            <input type="submit" value="Submit button, mini" data-icon="grid" data-iconpos="right" data-mini="true"  data-theme="e" />
        </div><!-- /demo-html -->
        
        <h2>Inline buttons</h2>
        <div data-demo-html="true">
            <a href="#" data-role="button" data-inline="true" data-icon="star">Inline + icon</a>
            <a href="#" data-role="button" data-inline="true" data-theme="b" data-mini="true">Mini + theme</a>
            <a href="#" data-role="button" data-inline="true" data-icon="plus" data-iconpos="notext" data-theme="e" data-mini="true">icon only button</a>
        </div><!-- /demo-html -->
        
        <h2>Horizontal grouped buttons</h2>
        <div data-demo-html="true">
            <div data-role="controlgroup" data-type="horizontal" data-mini="true">
                <a href="#" data-role="button" data-icon="plus" data-theme="b">Add</a>
                <a href="#" data-role="button" data-icon="delete" data-theme="b">Delete</a>
                <a href="#" data-role="button" data-icon="grid" data-theme="b">More</a>
            </div>
        </div><!-- /demo-html -->

        <h2>Sliders</h2>
        
        <div data-demo-html="true">
            <label for="slider">Slider:</label>
            <input type="range" name="slider" id="slider" value="50" min="0" max="100" />
        </div><!-- /demo-html -->

        <div data-demo-html="true">
            <label for="slider-fill">Slider with fill and step of 50:</label>
            <input type="range" name="slider-fill" id="slider-fill" value="60" min="0" max="1000" step="50" data-highlight="true" />
        </div><!-- /demo-html -->

        <div data-demo-html="true">
            <label for="slider-fill-mini">Slider with fill, mini, track theme:</label>
            <input type="range" name="slider-fill-mini" id="slider-fill-mini" value="40" min="0" max="100" data-mini="true" data-highlight="true" data-theme="b" data-track-theme="d" />
        </div><!-- /demo-html -->
        
        <h2>Range slider</h2>
                        
        <div data-demo-html="true">
        <form>
            <div data-role="rangeslider">
                <label for="range-1a">Rangeslider:</label>
                <input type="range" name="range-1a" id="range-1a" min="0" max="100" value="40">
                <label for="range-1b">Rangeslider:</label>
                <input type="range" name="range-1b" id="range-1b" min="0" max="100" value="80">
            </div>
        </form>
        </form>
        </div><!-- /demo-html -->

        <h2>Flip switch</h2>
        <div data-demo-html="true">
            <label for="slider2">Flip switch:</label>
            <select name="slider2" id="slider2" data-role="slider">
                <option value="off">Off</option>
                <option value="on">On</option>
            </select>
        </div><!-- /demo-html -->

        <h2>Checkboxes</h2>
        
        <div data-demo-html="true">
            <fieldset data-role="controlgroup">
                <legend>Checkboxes, vertical controlgroup:</legend>
                <input type="checkbox" name="checkbox-1a" id="checkbox-1a" checked  />
                <label for="checkbox-1a">Cheetos</label>

                <input type="checkbox" name="checkbox-2a" id="checkbox-2a" />
                <label for="checkbox-2a">Doritos</label>

                <input type="checkbox" name="checkbox-3a" id="checkbox-3a" />
                <label for="checkbox-3a">Fritos</label>

                <input type="checkbox" name="checkbox-4a" id="checkbox-4a" />
                <label for="checkbox-4a">Sun Chips</label>
            </fieldset>
        </div><!-- /demo-html -->

        <div data-demo-html="true">
            <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
                <legend>Checkboxes, mini, horizontal controlgroup:</legend>
                <input type="checkbox" name="checkbox-6" id="checkbox-6" />
                <label for="checkbox-6">b</label>

                <input type="checkbox" name="checkbox-7" id="checkbox-7" checked />
                <label for="checkbox-7"><em>i</em></label>

                <input type="checkbox" name="checkbox-8" id="checkbox-8" />
                <label for="checkbox-8">u</label>
            </fieldset>
        </div><!-- /demo-html -->

        <h2>Radio buttons</h2>
        
        <div data-demo-html="true">
                <fieldset data-role="controlgroup">
                    <legend>Radio buttons, vertical controlgroup:</legend>
                        <input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked" />
                        <label for="radio-choice-1">Cat</label>

                        <input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2"  />
                        <label for="radio-choice-2">Dog</label>

                        <input type="radio" name="radio-choice-1" id="radio-choice-3" value="choice-3"  />
                        <label for="radio-choice-3">Hamster</label>

                        <input type="radio" name="radio-choice-1" id="radio-choice-4" value="choice-4"  />
                        <label for="radio-choice-4">Lizard</label>
                </fieldset>
        </div><!-- /demo-html -->

        <div data-demo-html="true">
                <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
                    <legend>Radio buttons, mini, horizontal controlgroup:</legend>
                        <input type="radio" name="radio-choice-b" id="radio-choice-c" value="list" checked="checked" />
                        <label for="radio-choice-c">List</label>
                        <input type="radio" name="radio-choice-b" id="radio-choice-d" value="grid" />
                        <label for="radio-choice-d">Grid</label>
                        <input type="radio" name="radio-choice-b" id="radio-choice-e" value="gallery" />
                        <label for="radio-choice-e">Gallery</label>
                </fieldset>
        </div><!-- /demo-html -->

        <h2>Selects</h2>
        
        <div data-demo-html="true">
            <label for="select-choice-1" class="select">Select, native menu</label>
            <select name="select-choice-1" id="select-choice-1">
                <option value="standard">Standard: 7 day</option>
                <option value="rush">Rush: 3 days</option>
                <option value="express">Express: next day</option>
                <option value="overnight">Overnight</option>
            </select>
        </div><!-- /demo-html -->

        <div data-demo-html="true">
            <label for="select-choice-a" class="select">Custom select menu:</label>
            <select name="select-choice-a" id="select-choice-a" data-native-menu="false">
                <option>Custom menu example</option>
                <option value="standard">Standard: 7 day</option>
                <option value="rush">Rush: 3 days</option>
                <option value="express">Express: next day</option>
                <option value="overnight">Overnight</option>
            </select>
        </div><!-- /demo-html -->

        <div data-demo-html="true">
            <label for="select-choice-8" class="select">Multi-select with optgroups, custom icon and position:</label>
            <select name="select-choice-8" id="select-choice-8" multiple="multiple" data-native-menu="false" data-icon="grid" data-iconpos="left">
                
                <option>Choose a few options:</option>
                <optgroup label="USPS">
                    <option value="standard" selected>Standard: 7 day</option>
                    <option value="rush">Rush: 3 days</option>
                    <option value="express">Express: next day</option>
                    <option value="overnight">Overnight</option>
                </optgroup>
                <optgroup label="FedEx">
                    <option value="firstOvernight">First Overnight</option>
                    <option value="expressSaver">Express Saver</option>
                    <option value="ground">Ground</option>
                </optgroup>
            </select>
        </div><!-- /demo-html -->

        <h2>Text inputs & Textareas</h2>
        
        <div data-demo-html="true">
             <label for="text-basic">Text input:</label>
             <input type="text" name="text-basic" id="text-basic" value=""  />
        </div><!-- /demo-html -->	

        <div data-demo-html="true">
            <label for="textarea">Textarea:</label>
            <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
        </div><!-- /demo-html -->

        <div data-demo-html="true">
             <label for="number-pattern">Number + [0-9]* pattern:</label>
             <input type="number" name="number" pattern="[0-9]*" id="number-pattern" value="" />
        </div><!-- /demo-html -->

        <div data-demo-html="true">
             <label for="date">Date:</label>
             <input type="date" name="date" id="date" value="" />
        </div><!-- /demo-html -->

        <div data-demo-html="true">
             <label for="tel">Tel:</label>
             <input type="tel" name="tel" id="tel" value="" />
        </div><!-- /demo-html -->

        <div data-demo-html="true">
             <label for="search">Search Input:</label>
             <input type="search" name="password" id="search" value="" placeholder="Placeholder text..." />
        </div><!-- /demo-html -->

        <div data-demo-html="true">
             <label for="file">File:</label>
             <input type="file" name="file" id="file" value="" />
        </div><!-- /demo-html -->

        <div data-demo-html="true">
             <label for="password">Password:</label>
             <input type="password" name="password" id="password" value="" autocomplete="off" />
        </div><!-- /demo-html -->
   
	
	</div><!-- /content -->
	
	<div data-role="footer" class="jqm-footer">
		<p class="jqm-version"></p>
		<p>Copyright 2013 The jQuery Foundation</p>
	</div><!-- /footer -->
	
<?php include( '../../global-nav.php' ); ?>
	
</div><!-- /page -->
</body>
</html>
