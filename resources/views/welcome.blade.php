<link href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
<div id="treeRoot">
  <ul>
    <li data-jstree='{"opened":true}'>Test Project
      <ul>
        <li data-jstree='{"opened":true}'>Assemblies
          <ul>
            <li data-jstree='{"opened":true}'>Assemblies 1
 <ul>
            <li data-jstree='{"opened":true}'>Components
<ul>
            <li>Component 1</li>
            <li>Component 2</li>
            <li>Component 3</li>
          </ul>
            </li> 
          </ul> 
            </li> 
              <li data-jstree='{"opened":true}'>Assemblies 2
 <ul>
            <li data-jstree='{"opened":true}'>Components
<ul>
            <li>Component 4</li>
            <li>Component 5</li>
          </ul>
            </li> 
          </ul> 
            </li> 
              <li data-jstree='{"opened":true}'>Assemblies 3
 <ul>
            <li data-jstree='{"opened":true}'>Components
<ul>
            <li>Component 6</li>
           
          </ul>
            </li> 
          </ul> 
            </li> 
          </ul> 

        </li>

      </ul>

        <ul>
             <li data-jstree='{"opened":true}'>Backgrounds
<ul>
            <li data-jstree='{"opened":true}'>Cool Blue
<ul>
            <li>Beige</li>
            <li>Aqua</li>
          </ul>
            </li> 
          </ul>
            </li>
           
          </ul>
            <ul>
             <li data-jstree='{"opened":true}'>material set</li></ul>
    </li>
  </ul>
</div>
<a href="/test">Ajax</a>
<script type="text/javascript">
    $(function() {
  $("#treeRoot").jstree({
    core: {
      themes: {
        variant: "small"
      }
    }
  });
});
</script>>