<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomType $roomType
 */
?>


	<!-- BEGIN: Subheader -->
    <div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
                                 Room Type - Details View
								</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="/Dashboard" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
                                    </li>
                                    <li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="/room-types" class="m-nav__link">
											<span class="m-nav__link-text">
												Room Types
											</span>
										</a>
									</li>
								
								</ul>
							</div>
							<div>
								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
									<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
										<i class="la la-plus m--hide"></i>
										<i class="la la-ellipsis-h"></i>
									</a>
									<div class="m-dropdown__wrapper">
										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
										<div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav">
                                                            <li class="m-nav__section m-nav__section--first">
                                                                <span class="m-nav__section-text">
                                                                    Quick Actions
                                                                </span>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/room-types/edit/<?php echo $roomType->id ?>" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-edit-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                    Edit Room Type
                                                                    </span>
                                                                </a>
                                                            </li>
                                                                                                                     
                                                            <li class="m-nav__item">
                                                                <a href="/room-types" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-menu-button"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Room Types
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/room-types/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-medical"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Room Type
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/rooms" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-pie-chart"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Rooms
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/rooms/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-list-3"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Room
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/rates" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-clipboard"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Rates
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/rates/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-add"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Rate
                                                                    </span>
                                                                </a>
                                                            </li>







                                                           
                                                        
                                                            <li class="m-nav__section">
                                                                <span class="m-nav__section-text">
                                                                    Useful Links
                                                                </span>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-info"></i>
                                                                    <span class="m-nav__link-text">
                                                                        FAQ
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Support
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__separator m-nav__separator--fit m--hide"></li>
                                                            <li class="m-nav__item m--hide">
                                                                <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                    Submit
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				


<br>


<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="flaticon-statistics"></i>
												</span>
												
												<h2 class="m-portlet__head-label m-portlet__head-label--warning">
													<span>
                                                    <?= h($roomType->room_type_name) ?>
													</span>
												</h2>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">


    <table class="table table-stripped">
      
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($roomType->alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Back Color') ?></th>
            <td>
                <div style="width:40px; height:40px; background:<?= h($roomType->back_color) ?>"></div>
           
                
           </td>
        </tr>
    
        <tr>
            <th scope="row"><?= __('Sort Key') ?></th>
            <td><?= $this->Number->format($roomType->sort_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Max Adult') ?></th>
            <td><?= $this->Number->format($roomType->max_adult) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Max Child') ?></th>
            <td><?= $this->Number->format($roomType->max_child) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inactive') ?></th>
            <td><?= $this->Number->format($roomType->inactive) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($roomType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($roomType->modified) ?></td>
        </tr>
        <tr>
            <th>
            <h4><?= __('Description') ?></h4>
            </th>
            <td>
            <?= $this->Text->autoParagraph(h($roomType->description)); ?>
            </td>
        </tr>
    </table>
   

                                    </div>
                                </div>
                                
<br>



<div class="m-portlet m-portlet--creative m-portlet--first m-portlet--bordered-semi">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="flaticon-statistics"></i>
												</span>
											
												<h2 class="m-portlet__head-label m-portlet__head-label--danger">
													<span>
                                                         Related Rates
													</span>
												</h2>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">
                                        

        <?php if (!empty($roomType->rates)): ?>
        <table cellpadding="0" cellspacing="0" class='table' >
            <tr>
                
                <th scope="col"><?= __('Rate Type') ?></th>
                <th scope="col"><?= __('Rate Name') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
               
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($roomType->rates as $rates): ?>
            <tr>
                
                <td><?= h($rates->rate_type->rate_type_name) ?></td>
                <td><?= h($rates->rate_name) ?></td>
                <td><?= h($rates->amount) ?></td>
               
                <td><?= h($rates->created) ?></td>
                <td><?= h($rates->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Rates', 'action' => 'view', $rates->id],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Rates', 'action' => 'edit', $rates->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rates', 'action' => 'delete', $rates->id],['class'=>'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $rates->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
                                
                                    
                                    </div>
                                    </div>




<br>
<div class="m-portlet m-portlet--creative m-portlet--first m-portlet--bordered-semi">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="flaticon-statistics"></i>
												</span>
											
												<h2 class="m-portlet__head-label m-portlet__head-label--success">
													<span>
                                                    Related Rooms
													</span>
												</h2>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">
                                        

 <?php if (!empty($roomType->rooms)): ?>
        <table cellpadding="0" cellspacing="0"  class='table'>
            <tr>
                
                <th scope="col"><?= __('Room Type') ?></th>        
                <th scope="col"><?= __('Room Name') ?></th>
                <th scope="col"><?= __('Room Owner') ?></th>
               
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($roomType->rooms as $rooms): ?>
            <tr>
              
                <td><?= h($rooms->room_type->room_type_name) ?></td>
              
               
                <td><?= h($rooms->room_name) ?></td>
                <td><?= h($rooms->room_owner->first_name) ?>  <?= h($rooms->room_owner->last_name) ?></td>
                
                <td><?= h($rooms->created) ?></td>
                <td><?= h($rooms->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Rooms', 'action' => 'view', $rooms->id],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Rooms', 'action' => 'edit', $rooms->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rooms', 'action' => 'delete', $rooms->id],['class'=>'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $rooms->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>

                                
                                    
                                    </div>
                                    </div>







