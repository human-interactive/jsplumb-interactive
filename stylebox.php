<div id="controlbox" style="position:absolute;" class="col-md-3">
            <div  class="panel panel-info collapsable">
              <div class="panel-heading flat">
                <h4 class="panel-title"><i class="glyphicon glyphicon-cog"></i> Control Box
                <a class="collapse-toggle" data-toggle="collapse" href="#controlpanel"><i class="glyphicon glyphicon-minus pull-right collapsable-icon"></i>
              </a>
                </h4>
              </div>
              <div id="controlpanel" class="panel-collapse collapse">
                <div class="panel-body" style="background-color:ghostwhite">
                    <fieldset>
                      <legend>Overlay</legend>
                      <div style="text-align:center;" >
                        <strong>Arraow Position</strong><br/>
                        <input id="arraowposition" class="slider-bar" data-slider-id='ex1Slider' type="text" data-slider-min="-1" data-slider-max="1" data-slider-step="1" data-slider-value="0"/><br/><br/>
                        <strong>Arraow Direction</strong><br/>
                        <input id="arraowdirection" class="slider-bar" data-slider-id='ex1Slider' type="text" data-slider-min="-1" data-slider-max="1" data-slider-step="1" data-slider-value="0"/><br/>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Connection</legend>
                      <div style="text-align:center;" >
                        <strong>Connection Style</strong><br/>
                        <select class="form-control" name="connectionstyle">
                          <option>Bezier</option>
                          <option>Flowchart</option>
                          <option>Straight</option>
                          <option>StateMachine</option>
                        </select><br/>
                        <strong>Paint Style</strong><br/>
                        <div class="form-inline">
                          <input type="number" name="stroke" class="form-control compact" min="1" max="5" value="1" style="width:40px; float:left" />
                          <select class="form-control compact" style="float:left" name="paintstyle">
                            <option>Solid</option>
                            <option>Dashed</option>
                          </select>
                          <div class="input-group colorpicker col-md-2" style="padding:0px;">
                              <input type="text" value="" class="form-control" name="connectioncolor"/>
                              <span class="input-group-addon"><i></i></span>
                          </div>
                          
                        </div>
                      </div>
                    </fieldset>
                    <br/>
                    <button type="button" id="changeconnection" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-ok"></span></button>
                </div>
              </div>
            </div>
            </div>