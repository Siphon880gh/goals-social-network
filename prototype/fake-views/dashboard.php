<div>Hi {{username}}! This page will show all your posts, goals, milestones, and comments.</div>

<div class="mt-3">What do you want to do?</div>
<ul>
    <li><a class="d-none-off" href="./goal-planner/" onclick="prototypeHooksLink(event);">Setup your goal planner</a></li>
    <li><a class="d-none-off" href="./profile/" onclick="prototypeHooksLink(event);">See profile</a></li>
</ul>
</div>
<!-- Remove line when refactored into production code: -->
<script>$(".page-title").text("{{pageTitle}}");</script>