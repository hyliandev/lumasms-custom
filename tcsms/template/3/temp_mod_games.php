<?php

class template_mod_games {

function resdb_row ($res) {
global $STD;
return <<<HTML
<tr>
  <td class="sformlowline" style="padding:0px;border-right:1px solid gray" width="100" align="center">
    <a id="res_{$res['rid']}" />
    <a href="{$STD->tags['root_url']}act=resdb&param=02&c={$STD->tags['c']}&id={$res['rid']}">
    {$res['thumbnail']}</a>
  </td>
  <td class="sformlowline" style="padding:0px;text-align:left" height="100" valign="top">
    <table border="0" cellpadding="2" cellspacing="0" width="100%" height="100">
      <tr>
        <td height="25%" width="60%" class="sformsubstrip">
          <a href="{$STD->tags['root_url']}act=resdb&param=02&c={$STD->tags['c']}&id={$res['rid']}">
          <b>{$res['title']}</b></a>
        </td>
        <td height="25%" width="25%" class="sformstrip">
	      By: <b>{$res['author']}</b>
        </td>
        <td height="25%" width="15%" class="sformstrip" style="text-align:right;padding:2px">
          {$res['email_icon']} {$res['website_icon']}
        </td>
      </tr>
      <tr>
        <td valign="top" width="100%" height="50%" colspan="3">
           {$res['description']}
        </td>
      </tr>
      <tr>
        <td valign="bottom">
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td width="33%" class="subtext">
                <span class="vertical-align:middle">Downloads: <b>{$res['downloads']}</b></span>
              </td>
              <td width="33%" class="subtext">
                <span style="vertical-align:middle">Comments: <b>{$res['comments']}</b> </span>{$res['new_comments']}
              </td>
              <td width="33%" class="subtext">
                <span style="vertical-align:middle">Score: <b>{$res['average_score']}</b></span>
              </td>
            </tr>
          </table>
        </td>
        <td valign="bottom" width="100%" colspan="2">
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td width="50%" class="subtext">
                Added: {$res['created']}
              </td>
              <td width="50%" class="subtext">
                {$res['updated']}
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
HTML;
}

function resdb_page ($res) {
global $STD;
return <<<HTML
<script type="text/javascript">
  <!--
  function version_history() {
    window.open('{$STD->tags['root_url']}act=resdb&param=04&rid={$res['rid']}','Complete Version History','scrollbars=yes,menubar=no,height=500,width=500,esizable=yes,toolbar=no,location=no,status=no');
  }
  -->
</script>
  <div class="sform">
  <table class="sformtable" cellspacing="0">
    <tr>
      <td height="28" colspan="2" class="sformsubstrip">
        <b class="highlight">{$res['title']}</b>
      </td>
    </tr>
    <tr>
    <td rowspan="2" width="320" height="240" align="center">
      {$res['preview']}
    </td>
    <td align="left" valign="top" height="212">
      <table border="0" cellpadding="2" cellspacing="0" width="100%">
        <tr>
          <td height="25" class="sformstrip">
  	      By: <b>{$res['author']}</b>
          </td>
          <td height="25" width="15%" class="sformstrip" style="text-align:right;padding:2px">
            {$res['email_icon']} {$res['website_icon']}
          </td>
        </tr>
        <tr>
          <td valign="top" width="100%" colspan="3">
            {$res['description']}
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td height="28" class="sformstrip">
      <table border="0" cellpadding="2" cellspacing="0" width="100%">
        <tr>
          <td width="50%">Completion: <b>{$res['completion']}</b></td>
          <td width="50%">Genre: <b>{$res['genre']}</b></td>
        </tr>
      </table>
    </td>
  </tr>
  </table>
  </div>
  <br />
  
  <table class="sformtable" cellspacing="0" cellpadding="0">
    <tr>
      <td width="50%" valign="top">
        <div class="sform">
        <div class="sformstrip">Update History</div>
        <table class="sformtable" cellspacing="0">
  	    <tr>
  	      <td colspan="2">
  	        &nbsp;
  	      </td>
  	    </tr>
          {$res['version_history']}
        </table>
        </div>
        <div style="padding-top:4px">
          <img src="{$STD->tags['image_path']}/report.gif" alt="[!]" style="display:inline; vertical-align:middle" />
          <a href="{$res['report_url']}" style="vertical-align: middle" class="outlink">Report This Submission</a>
        </div>
      </td>
      <td width="3%">
        &nbsp;
      </td>
      <td width="47%" valign="top">
        <div class="sform">
        <table class="sformtable" cellspacing="0">
          <tr>
            <td width="25" height="25" align="center"><img src="{$STD->tags['image_path']}/time.gif" alt="[O]" /></td>
            <td width="90">Created:</td>
            <td>{$res['created']}</td>
          </tr>
          <tr>
            <td width="25" height="25" align="center"><img src="{$STD->tags['image_path']}/time.gif" alt="[O]" /></td>
            <td>Updated:</td>
            <td>{$res['updated']}</td>
          </tr>
          <tr>
            <td width="25" height="25" align="center"><img src="{$STD->tags['image_path']}/disk.gif" alt="[O]" /></td>
            <td>File Size:</td>
            <td>{$res['filesize']}</td>
          </tr>
          <tr>
            <td width="25" height="25" align="center"><img src="{$STD->tags['image_path']}/gray_arrow.gif" alt="[O]" /></td>
            <td>Views:</td>
            <td>{$res['views']}</td>
          </tr>
          <tr>
            <td width="25" height="25" align="center"><img src="{$STD->tags['image_path']}/green_arrow.gif" alt="[O]" /></td>
            <td>Downloads:</td>
            <td>{$res['downloads']}</td>
          </tr>
          <tr>
            <td colspan="3" align="center">
              <span style="font-size:14pt">{$res['download_text']}</span>
            </td>
          </tr>
        </table>
        </div>
      </td>
    </tr>
  </table>
  <br />
  <div>
    <span class="boxheader">Reviews</span>
  </div>
  <div class="sform">
  <table class="sformtable" cellspacing="1">
  <tr>
    <td width="20%" class="sformstrip">Author</td>
    <td width="70%" class="sformstrip">Summary</td>
    <td width="10%" class="sformstrip" style="text-align:center">Score</td>
  </tr>
    {$res['reviews']}
  <tr>
    <td colspan="2" class="sformstrip" style="text-align:right">Average Score</td>
    <td class="sformright sformstrip" style="text-align:center; font-weight:bold">{$res['average_score']}</td>
  </tr>
  </table>
  </div>
  <br />
  <div style="text-align:right">
    <span style="font-size:14pt"><a href="{$res['add_review']}" class="outlink">Add Review</a></span>
  </div>
  <br />
HTML;
}

function public_row ($res, $cat) {
global $STD;
return <<<HTML
<tr>
  <td class="sformlowline" style="padding:0px;border-right:1px solid gray" width="100" align="center">
    <a id="res_{$res['rid']}" />
    <a href="{$STD->tags['root_url']}act=resdb&amp;param=02&amp;c={$cat}&amp;id={$res['rid']}">
    {$res['thumbnail']}</a>
  </td>
  <td class="sformlowline" style="padding:0px;text-align:left" height="100">
    <table border="0" cellpadding="2" cellspacing="0" width="100%" style="height: 100%">
      <tr>
        <td height="25" width="60%" class="sformsubstrip">
          {$res['dl_icon']}
          <span style="display:inline; vertical-align:middle">
          <a href="{$STD->tags['root_url']}act=resdb&amp;param=02&amp;c={$cat}&amp;id={$res['rid']}">
          <b>{$res['title']}</b></a></span>
        </td>
        <td height="25" width="25%" class="sformstrip">
	      By: <b>{$res['author']}</b>
        </td>
        <td height="25" width="15%" class="sformstrip" style="text-align:right;padding:2px">
          {$res['email_icon']} {$res['website_icon']}
        </td>
      </tr>
      <tr>
        <td valign="top" width="100%" height="50" colspan="3">
           {$res['description']}
        </td>
      </tr>
      <tr>
        <td valign="bottom" height="25">
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td width="50%">
                Downloads: <b>{$res['downloads']}</b>
              </td>
              <td width="50%">
                Score: <b>{$res['average_score']}</b>
              </td>
            </tr>
          </table>
        </td>
        <td valign="bottom" width="100%" colspan="2">
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td width="50%" style="font-size:8pt">
                Added: {$res['created']}
              </td>
              <td width="50%" style="font-size:8pt">
                {$res['updated']}
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
HTML;
}

function manage_row ($res, $cat) {
global $STD;
return <<<HTML
<tr>
  <td class="sformlowline" style="padding:0px;border-right:1px solid gray" width="100" align="center">
    <a id="res_{$res['rid']}" />
    <a href="{$STD->tags['root_url']}act=resdb&amp;param=02&amp;c={$cat}&amp;id={$res['rid']}">
    {$res['thumbnail']}</a>
  </td>
  <td class="sformlowline" style="padding:0px;text-align:left" height="100">
    <table border="0" cellpadding="2" cellspacing="0" width="100%" style="height: 100%">
      <tr>
        <td height="25" width="60%" class="sformsubstrip">
          {$res['page_icon']}{$res['dl_icon']}
          <span style="display:inline; vertical-align:middle">
          <a href="{$STD->tags['root_url']}act=user&amp;param=06&amp;c={$cat}&amp;rid={$res['rid']}">
          <b>{$res['title']}</b></a></span>
        </td>
        <td height="25" width="25%" class="sformstrip">
	      By: <b>{$res['author']}</b>
        </td>
        <td height="25" width="15%" class="sformstrip" style="text-align:right;padding:2px">
          {$res['email_icon']} {$res['website_icon']}
        </td>
      </tr>
      <tr>
        <td valign="top" width="100%" height="50" colspan="3">
           {$res['description']}
        </td>
      </tr>
      <tr>
        <td valign="bottom" height="25">
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td width="50%">
                Downloads: <b>{$res['downloads']}</b>
              </td>
              <td width="50%">
                Score: <b>{$res['average_score']}</b>
              </td>
            </tr>
          </table>
        </td>
        <td valign="bottom" width="100%" colspan="2">
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td width="50%" style="font-size:8pt">
                Added: {$res['created']}
              </td>
              <td width="50%" style="font-size:8pt">
                {$res['updated']}
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
HTML;
}

function manage_page ($res, $token, $max_size) {
global $STD;
return <<<HTML
<div class="sform">
<form method="post" action="{$STD->tags['root_url']}act=user&amp;param=07" enctype="multipart/form-data">
<input type="hidden" name="security_token" value="{$token}" />
<input type="hidden" name="c" value="{$res['type']}" />
<input type="hidden" name="rid" value="{$res['rid']}" />
<div class="sformstrip">Information about your submission.  These values cannot be changed.</div>
<table class="sformtable" cellspacing="1">
<tr>
  <td class="sformleft">Type</td>
  <td class="sformright">{$res['type_name']}</td>
</tr>
<tr>
  <td class="sformleft">Date Submitted</td>
  <td class="sformright">{$res['created']}</td>
</tr>
<tr>
  <td class="sformleft">Last Updated</td>
  <td class="sformright">{$res['updated']}</td>
</tr>
<tr>
  <td class="sformleft">Number of Downloads</td>
  <td class="sformright">{$res['downloads']}</td>
</tr>
<tr>
  <td class="sformleft">Number of Views</td>
  <td class="sformright">{$res['views']}</td>
</tr>
</table>
<div class="sformstrip">Submission Parameters.  These values define your submission.</div>
<table class="sformtable" cellspacing="1">
<tr>
  <td class="sformleft">Title</td>
  <td class="sformright"><input type="text" name="title" size="40" value="{$res['title']}" class="textbox" /></td>
</tr>
<tr>
  <td class="sformleft">Additional Authors<br /><span style="font-size:8pt">(Separate names with commas)</span></td>
  <td class="sformright"><input type="text" name="author_override" size="40" value="{$res['author_override']}" class="textbox" /></td>
</tr>
<tr>
  <td class="sformleft">Description</td>
  <td class="sformright"><textarea name="description" rows="4" cols="40" class="textbox">{$res['description']}</textarea></td>
</tr>
</table>
<div class="sformstrip">Categorization.  Expand the lists to associate categories with this submission.</div>
<table class="sformtable" cellspacing="1">
<tr>
  <td class="sformleft">Format</td>
  <td class="sformright">{$res['cat1']}</td>
</tr>
<tr>
  <td class="sformleft">Contents</td>
  <td class="sformright">{$res['cat2']}</td>
</tr>
</table>
<div class="sformstrip">Manage Files</div>
<table class="sformtable" cellspacing="1">
<tr>
  <td class="sformleft">File <a href="javascript:show_hide('m_4');">(Replace)</a></td>
  <td class="sformright"><a href="{$STD->tags['root_url']}act=resdb&amp;param=02&amp;c={$STD->tags['c']}&amp;id={$res['rid']}">[View / Download]</a></td>
</tr>
<tr id="m_4" style="display:none">
  <td class="sformleft">&nbsp;</td>
  <td class="sformright"><input type="file" name="file" size="40" class="textbox" />
    <span class="subtext">Max Size: {$max_size['file']}</span></td>
</tr>
<tr>
  <td class="sformleft">Preview Screenshot <a href="javascript:show_hide('m_5');">(Replace)</a></td>
  <td class="sformright">{$res['preview']}</td>
</tr>
<tr id="m_5" style="display:none">
  <td class="sformleft">&nbsp;</td>
  <td class="sformright"><input type="file" name="preview" size="40" class="textbox" />
    <span class="subtext">Max Size: {$max_size['preview']}</span></td>
</tr>
<tr>
  <td class="sformleft">Thumbnail <a href="javascript:show_hide('m_6');">(Replace)</a></td>
  <td class="sformright">{$res['thumbnail']}</td>
</tr>
<tr id="m_6" style="display:none">
  <td class="sformleft">&nbsp;</td>
  <td class="sformright"><input type="file" name="thumbnail" size="40" class="textbox" />
    <span class="subtext">Max Size: {$max_size['thumbnail']}</span></td>
</tr>
</table>
<div class="sformstrip">Short description of this update</div>
<table class="sformtable" cellspacing="1">
<tr>
  <td class="sformleft">Reason</td>
  <td class="sformright"><textarea name="reason" rows="4" cols="40" class="textbox"></textarea>
</tr>
</table>
<div class="sformstrip" style="text-align: center">
  <input type="submit" value="Update Submission" class="button" />
  <input type="submit" name="rem" value="Request Removal" class="button" />
</div>
</form>
</div>
HTML;
}

function submit_form ($res, $max_size) {
global $STD;
return <<<HTML
<div class="sformstrip">Fill in information about your submission.</div>
<table class="sformtable" cellspacing="1">
<tr>
  <td class="sformleft">Completion</td>
  <td class="sformright">{$res['cat1']}</td>
</tr>
<tr>
  <td class="sformleft">Genre</td>
  <td class="sformright">{$res['cat2']}</td>
</tr>
</table>
<div class="sformstrip">Select Files to upload</div>
<table class="sformtable" cellspacing="1">
<tr>
  <td class="sformleft">File</td>
  <td class="sformright"><input type="file" name="file" size="40" class="textbox" />
    <span class="subtext">Max Size: {$max_size['file']} - Formats accepted: ZIP</span></td>
</tr>
<tr>
  <td class="sformleft">Preview Screenshot</td>
  <td class="sformright"><input type="file" name="preview" size="40" class="textbox" />
    <span class="subtext">Max Size: {$max_size['preview']} - Max Dimensions: 320x240 pixels</span></td>
</tr>
<tr>
  <td class="sformleft">Thumbnail (Optional)</td>
  <td class="sformright"><input type="file" name="thumbnail" size="40" class="textbox" />
    <span class="subtext">Max Size: {$max_size['thumbnail']} - Max Dimensions: 100x100 pixels</span></td>
</tr>
</table>
<div class="sformstrip">Add a title and description</div>
<table class="sformtable" cellspacing="1">
<tr>
  <td class="sformleft">Title</td>
  <td class="sformright"><input type="text" name="title" value="{$res['title']}" size="40" class="textbox" /></td>
</tr>
<tr>
  <td class="sformleft">Description</td>
  <td class="sformright"><textarea name="description" rows="4" cols="40" class="textbox">{$res['description']}</textarea></td>
</tr>
</table>
HTML;
}

function game_reviews_row ($rev) {
global $STD;
return <<<HTML
<tr>
  <td class="sformleftw">
    <b class="highlight">{$rev['author']}</b>
  </td>
  <td class="sformleftw">
    <a href="{$STD->tags['root_url']}act=resdb&amp;param=02&amp;c=3&amp;id={$rev['rid']}&amp;gid={$rev['gid']}" style='text-decoration:none'>
      {$rev['description']}</a>
  </td>
  <td class="sformleftw" style="text-align:center">
    <b>{$rev['score']} / 10</b>
  </td>
</tr>

HTML;
}

function news_update_block_header ($name) {
global $STD;
return <<<HTML
<div class='newsstrip'>Games</div>
<table class='sformtable' cellspacing='1'>
HTML;
}

function news_update_block_footer () {
global $STD;
return <<<HTML
</table>
HTML;
}

function news_upd_update_block_header ($name, $id) {
global $STD;
return <<<HTML
<div class="newssubstrip" style="text-align: center">
  <a href="javascript:show_hide('$id');" style="text-decoration:underline">Click to see updated $name</a></div>
<table id="$id" class='sformtable' style='display:none' cellspacing='1'>
HTML;
}

function news_upd_update_block_footer () {
global $STD;
return <<<HTML
</table>
HTML;
}

function news_update_block_row ($res) {
global $STD;
return <<<HTML
<tr>
  <td width='100' height='100' rowspan='3' align='center'>{$res['thumbnail']}</td>
  <td class='newsleftw' colspan='2' height='20'><a href='{$res['url']}'><b>{$res['title']}</b></a></td>
</tr>
<tr>
  <td class='newsleftw' height='20'>[{$res['type']}]</td>
  <td class='newsleftw' width='30%'>By {$res['username']}</td>
</tr>
<tr>
  <td class='newsleftw' colspan='2' valign='top'>{$res['description']}</td>
</tr>
HTML;
}

}
