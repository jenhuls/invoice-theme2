<div class="row expanded page__header">
  <div class="float-right">
    <button class="button">Add Invoice</button> <button class="button">Add Client</button> <button class="button">Add Project</button>
  </div>
</div>
<div id="dashboard__content" class="row medium-push-1">
<div id="stats__grid" class="row large-uncollapse">

    <div class="column small-4">
    5 Invoices
  </div>
    <div class="column small-4">
    3 Projects
  </div>
    <div class="column small-4">
    10 Tasks
  </div>

</div>
<table id="post-<?php the_ID(); ?>" <?php post_class('unstriped'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
  <tr>
    <thead>
      <th>ID</th>
      <th>Client Name</th>
      <th>Client Info</th>
      <th>Client Status</th>
      <th>Actions</th>
    </thead>
    <tbody>
      <tr>
        <td>1234</td>
        <td>XYZ Design</td>
        <td>info@xyzdesign.com<span>(202) 555-1234</span></td>
        <td class="Active"><span>Active</span></td>
        <td class="action"><span class="delete"><i class="fa fa-times" aria-hidden="true"></i></span><span class="edit"><i class="fa fa-times" aria-hidden="true"></i></span></td>
      </tr>
      <tr class="spacer"></tr>
      <tr>
        <td>1235</td>
        <td>ZYX Design</td>
        <td>info@zyxdesign.com<span>(202) 555-1234</span></td>
        <td class="Inactive"><span>Inactive</span></td>
        <td class="action"><span class="delete"><i class="fa fa-times" aria-hidden="true"></i></span><span class="edit"><i class="fa fa-times" aria-hidden="true"></i></span></td>
      </tr>
    </tbody>
  </tr>
</table>
</div>
