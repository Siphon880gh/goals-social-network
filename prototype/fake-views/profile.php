<style>
.avatar {
    width: 80px;
    height: 80px;
    border-radius:50%; /* Round avatar */
}
.comment-wrapper .avatar {
    width: 60px;
    height: 60px;
}
.post:first-child {
    margin-top:20px;
}
.post {
    padding: 10px;
    border: 5px solid black;
    margin-bottom: 20px;
}
.post_user_info {
    float: right;
}
.goal {

}
.detail {
    font-weight: 200;
}
.dates::before {
    content: "Duration:\00a0"
}
.post-owner {
    text-align: center;
}
.milestone-wrapper {
    width: 75%;
    border-radius: 5px;
    margin: 0 auto;
    border: 1px solid gray;
}
.milestone-wrapper.done {
    color: gray;
}
.milestone-wrapper:not(.done) .fa.fa-check {
    display: none;
}
.milestone-wrapper.done .fa.fa-check {
    margin-right: 5px;
}
.comment-wrapper {
    width: 75%;
    border-radius: 5px;
    margin: 0 auto;
    border: 1px solid gray;
}
.clear-fix {
    clear: both;
}
.comment-add-body {
    padding: 10px;
    border: 2px solid black;
    width: 75%;
    margin: 0 auto;
}
.comment-add-wrapper {
    padding: 5px !important;
    margin-top: 15px;
}
.comment-sign-in {
    width: 75%;
    margin: 0 auto;
}
.add-comment-input {
    width: 100%;
    display: block;
    resize: none;
}
</style>
<style>
.own-profile-options {
    border: 2px solid gray;
    padding: 10px;
}
.profile-page .infos {
    background-color: rgba(125,125,125,.5);
    padding: 10px;
}
.profile-page .info {
    height: 1.5rem;
}
.profile-page .info label {
    width: 120px;
    font-weight: 700;
    margin-right: 10px;
}
    
</style>

    {{#if viewingOwnProfile}}
    <div class="own-profile-options mb-4">
        <div>This is your own personal profile of your bio, posts, goals, milestones, and post comments</div>

        <div class="mt-3">What do you want to do?</div>
            <ul>
                <li><a class="d-none-off" href="./profile/edit" onclick="prototypeHooksLink(event);">Edit Profile</a></li>
            </ul>
        </div>
    </div>
    {{/if}}

    <div class="profile-page">

        {{#if userInfo}}
            <div class="infos mb-4">
                {{#if userInfo.name}}<div class="info name"><label>Name:</label><span>{{userInfo.name}}</span></div>{{/if}}
                {{#if userInfo.abbr}}<div class="info abbr"><label>Abbreviation:</label><span>{{userInfo.abbr}}</span></div>{{/if}}
                {{#if userInfo.email}}<div class="info email"><label>Email:</label><span>{{userInfo.email}}</span></div>{{/if}}
                {{#if userInfo.location}}<div class="info location"><label>Location:</label><span>{{userInfo.location}}</span></div>{{/if}}
                {{#if userInfo.occupation}}<div class="info occupation"><label>Occupation:</label><span>{{userInfo.occupation}}</span></div>{{/if}}
                {{#if userInfo.bio}}<div class="info bio"><label>Bio:</label><span>{{userInfo.bio}}</span></div>{{/if}}
                {{#if userInfo.linkFacebook}}<div class="info linkFacebook"><label><i class="fab fa-facebook">&nbsp;</i>Facebook:</label><a target="_blank" href="{{linkFacebook}}">{{userInfo.linkFacebook}}</a></div>{{/if}}
                {{#if userInfo.linkInstagram}}<div class="info linkInstagram"><label><i class="fab fa-instagram">&nbsp;</i>Instagram</label><a target="_blank" href="{{linkInstagram}}">{{userInfo.linkInstagram}}</a></div>{{/if}}
                {{#if userInfo.linkLinkedin}}<div class="info linkLinkedin"><label><i class="fab fa-linkedin">&nbsp;</i>Linkedin</label><a target="_blank" href="{{linkLinkedin}}">{{userInfo.linkLinkedin}}</a></div>{{/if}}
            </div> <!-- infos -->
        {{/if}}

        {{#unless posts}}
            <div class="no-posts">There are no posts by user!</div>
        {{/unless}}

        {{#each posts}}
        <div class="post" data-post-id={{_id}} data-owner-id={{user_id}}>
            <div class="">
                <figure class="post_user_info p-2">
                    <img class="avatar" src="./assets/img/users-default-avatars/{{avatar}}.png"></img>
                    <figcaption class="post-owner"><a href="./profile/{{assoc_user_id}}" onclick="prototypeHooksLink(event);">{{post_username}}</a></figcaption>
                </figure>
                <div class="goal"><label>Goal: </label><span>{{goal}}</span></div>
                <div class="detail"><label>Detail: </label><span>{{detail}}</span></div>

                <div class="dates mt-3">
                    <span class="start">{{date start}}</span> - <span class="end">{{date end}}</span>
                </div>
                <div class="clear-fix"></div>
            </div>
            <!-- <div>
                <button onclick="getClosestDataAttribute($(event.target), 'post-id');">Test data attributes</button>
            </div> -->
            <div class="">
                <ul class="nav nav-tabs js-a" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="javascript:void(0)" role="tab" aria-controls="home" aria-selected="true">Milestones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="javascript:void(0)" role="tab" aria-controls="profile" aria-selected="false">Comments</a>
                    </li>
                </ul>
                <div class="tab-content js-b">
                    <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab">
                        <div class="milestones-wrapper">
                        {{#each milestones}}
                            <div class="milestone-wrapper mt-2 mb-2 p-1 {{#if done}}done{{/if}}" data-milestone-id={{milestone_id}}>
                                <div><i class="fa fa-check"></i><label>Milestone: </labe><span>{{milestone}}</span></div>
                                <div><label>Detail: </labe><span>{{detail}}</span></div>
                            </div>
                        {{/each}}
                        </div>
                    </div>
                    <div class="tab-pane fade" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="comments-wrapper">
                        {{#each comments}}
                        <div class="comment-wrapper mt-2 mb-2 p-1" data-comment-id={{comment_id}} data-post-id={{post_id}} data-user-id={{assoc_user_id}}>
                            <figure class="post_user_info p-2">
                                <img class="avatar" src="./assets/img/users-default-avatars/{{avatar}}.png"></img>
                                <figcaption class="post-owner"><a href="./profile/{{assoc_user_id}}" onclick="prototypeHooksLink(event);">{{username}}</a></figcaption>
                            </figure>
                            <label>Comment: </label>
                            <div>{{comment}}</div>
                            <div class="clear-fix"></div>
                        </div>
                        {{/each}}
                        {{#if canComment}}
                        <div class="comment-add-wrapper">
                            <div class="comment-header">&nbsp;</div>
                            <form class="form-add-comment">
                                <div class="comment-add-body">
                                    <div class="input-group">
                                        <label>Add your comment:</label>
                                        <textarea class="add-comment-input editing"></textarea>
                                    </div>
            
                                    <a href="#" onclick="event.preventDefault(); addComment($(event.target), 'post-id');"><button class="add-comment standout">Submit</button></a>
                                </div>
                            </form>
                        </div>
                        {{else}}
                        <div class="comment-sign-in pt-3">Want to add your comment? <a href="login/" onclick="event.preventDefault(); prototypeHooksLink(event);">Log in</a></div>
                        {{/if}}
                        </div>
                    </div>
                </div>
            </div> <!-- Tabs and their contents -->
            
        </div> <!-- post -->
        {{/each}}

        </div> <!-- posts -->

    </div> <!-- view-own-profile-page -->

<script>
function updateUserInfo() {

  var $context = $(".edit-profile");
  var userInfoData = {
    name: $context.find(".full-name").val(),
    abbr: $context.find(".abb-name").val(),
    email: $context.find(".email").val(),
    location: $context.find(".location").val(),
    occupation: $context.find(".occupation").val(),
    bio: $context.find(".bio").val(),
    linkFacebook: $context.find(".link-facebook").val(),
    linkInstagram: $context.find(".link-instagram").val(),
    linkLinkedin: $context.find(".link-linkedin").val()
  }

  window.req.body = userInfoData;
  hasher.setHash("patch-api/users")
}
</script>

<script>
function addComment($here, datasetName) {
    var $context = $here.closest(`[data-${datasetName}]`);
    var postId = $context.data("post-id");
    console.assert(postId==="2", $context);

    var commentData = {
      comment: $context.find(".add-comment-input").val()
    }

    window.req.body = commentData;
    hasher.setHash(`post-api/posts/${postId}/comments`);
}
$(()=>{
    /**
     * Switching post tabs
     * A post tab is clicked. Two important components are A  which is the tabs,
     * and components B which is the appropriate content below the selected tab.
     * Information displayed through this manner can be milestones, comments, and 
     * more for that particular post. For this code to work, components A must be
     * adjacent sibling before components B.
     * 
     */
    $(".js-a a").on("click", ev=>{
        ev.preventDefault();
        var $contextDom = $(ev.target);
        var $a = $contextDom;
        var $componentA = $contextDom.closest(".js-a");

        // Change tab active state
        $componentA.find("a").removeClass("active");
        $a.addClass("active");
        var whichTab = $a.parent("li").index();

        // Activate the content based on the index position of the active tab
        var $componentB = $componentA.next(".js-b");
        $componentB.find(".tab-pane").removeClass("active show")
        $componentB.find(".tab-pane").eq(whichTab).addClass("active show")

    })
});
</script>

<!-- Remove line when refactored into production code: -->
<script>$(".page-title").text("{{pageTitle}}");</script>
