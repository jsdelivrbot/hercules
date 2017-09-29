<?php

	$pageTitle = "Buttons"; 

?>
    <?php include('../inc/head.php');?>

        <div class="row">
            <div class="small-12 column">
                <h3><?php echo $pageTitle; ?></h3>
                <hr>
            </div>
        </div>

        <div class="herc-panel">
            <div class="row">
                <div class="small-12 medium-6 column">
                	<h5 class="subtitle">Flat &mdash; Primary</h5>
                    <button class="btn btn--sml">Small</button>
                    <button class="btn">Default</button>
                    <button class="btn btn--lrg">Large</button>
                    <button class="btn btn--lrg btn--expand">Expand</button>
                    <button class="btn btn--disabled">Disabled</button>
                </div>
                <div class="small-12 medium-6 column">
                	<h5 class="subtitle">Example</h5>
                    <pre class="prettyprint">
&lt;button class=&quot;btn btn--sml&quot;&gt;Small&lt;/button&gt;
&lt;button class=&quot;btn&quot;&gt;Default&lt;/button&gt;
&lt;button class=&quot;btn btn--lrg&quot;&gt;Large&lt;/button&gt;
&lt;button class=&quot;btn btn--lrg btn--expand&quot;&gt;Expand&lt;/button&gt;
&lt;button class=&quot;btn btn--disabled&quot;&gt;Disabled&lt;/button&gt;

					</pre>
                </div>
            </div>
        </div>

        <div class="herc-panel">
            <div class="row">
                <div class="small-12 medium-6 column">
                	<h5 class="subtitle">Flat &mdash; Secondary</h5>
                    <button class="btn btn__hollow btn--sml">Small</button>
                    <button class="btn btn__hollow">Default</button>
                    <button class="btn btn__hollow btn--lrg">Large</button>
                    <button class="btn btn__hollow btn--expand">Expand</button>
                    <button class="btn btn--disabled">Disabled</button>
                </div>
                <div class="small-12 medium-6 column">
                	 <h5 class="subtitle">Example</h5>
                    <pre class="prettyprint">
&lt;button class=&quot;btn btn__hollow btn--sml&quot;&gt;Small&lt;/button&gt;
&lt;button class=&quot;btn btn__hollow&quot;&gt;Default&lt;/button&gt;
&lt;button class=&quot;btn btn__hollow btn--lrg&quot;&gt;Large&lt;/button&gt;
&lt;button class=&quot;btn btn__hollow btn--expand&quot;&gt;Expanded&lt;/button&gt;
&lt;button class=&quot;btn btn--disabled&quot;&gt;Disabled&lt;/button&gt;
					</pre>
                </div>
            </div>
        </div>

        <div class="herc-panel">
            <div class="row">
                <div class="small-12 medium-6 column">
                	<h5 class="subtitle">Slab</h5>
                    <button class="btn-slab">
                        <label>Label</label>
                    </button>
                    <button class="btn-slab">
                        <label>Label</label>
                        <hr>
                        <span>Secondary Label</span>
                    </button>
                </div>
               <div class="small-12 medium-6 column">
                	 <h5 class="subtitle">Example</h5>
                    <pre class="prettyprint">
&lt;button class=&quot;btn-slab&quot;&gt;
    &lt;label&gt;Label&lt;/label&gt;
&lt;/button&gt;

&lt;button class=&quot;btn-slab&quot;&gt;
    &lt;label&gt;Label&lt;/label&gt;
    &lt;hr&gt;
    &lt;span&gt;Secondary Label&lt;/span&gt;
&lt;/button&gt;
					</pre>
                </div>
            </div>
        </div>

        <div class="herc-panel">
            <div class="row">
                <div class="small-12 medium-6 column">
                	<h5 class="subtitle">Breadcrumb</h5>
                    <button class="btn-crumb">
                        <label>Breadcrumb</label>
                        <span></span>
                    </button>
                    <button class="btn-crumb">
                        <label>Breadcrumb</label>
                        <span></span>
                    </button>
                    <button class="btn-crumb">
                        <label>Breadcrumb</label>
                        <span></span>
                    </button>
                </div>
                <div class="small-12 medium-6 column">
                	<h5 class="subtitle">Example</h5>
                    <pre class="prettyprint">
&lt;button class=&quot;btn-crumb&quot;&gt;
    &lt;label&gt;Breadcrumb&lt;/label&gt;
    &lt;span&gt;&lt;/span&gt;
&lt;/button&gt;
				</pre>
                </div>
            </div>
        </div>


        <div class="herc-panel">
            <div class="row">
                <div class="small-12 medium-6 column">
                	<h5 class="subtitle">Brand Buttons</h5>
                    <button class="btn btn__facebook"><span></span>Facebook</button>
                </div>
                <div class="small-12 medium-6 column">
                	<h5 class="subtitle">Example</h5>
                    <pre class="prettyprint">
&lt;button class=&quot;btn btn__facebook&quot;&gt;&lt;span&gt;&lt;/span&gt;Facebook&lt;/button&gt;
				</pre>
                </div>
            </div>
        </div>

        <?php include('../inc/footer.php');?>