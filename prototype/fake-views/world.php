<div class="mb-3">World View. All Public posts, goals, milestones, and comments are here. To show a sample to attract signups.</div>

{{#each posts}}
<div class="bordered mb-2">
    <div class="bordered-alt">Post id: {{_id}}</div>
    <div class="bordered-alt">Post owner id: {{user_id}}</div>
    <div class="bordered-alt">Post username: {{post_username}}</div>
    <div class="bordered-alt">Content: {{content}}</div>
</div>
{{/each}}

<!-- Remove line when refactored into production code: -->
<script>$(".page-title").text("{{pageTitle}}");</script>