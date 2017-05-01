Feature: Create line chart from firepoi objects
  In order to create line chart for fire incidents
  As a context developer
  I need an array of firepoi objects

  Scenario: Get the fire events for Birmingham Area
    Given There is a viewBrumFirePoi array containing FirePoi objects
    When I call viewBrumFirePoi length
    Then I should get the total fire events in Birmingham

  Scenario: Get the fire events for Manchester Area
    Given There is a viewManchFirePoi array containing FirePoi objects
    When I call viewManchFirePoi length
    Then I should get the total fire events in Manchester

  Scenario: Get the fire events for London Area
    Given There is a viewLondonFirePoi array containing FirePoi objects
    When I call viewLondonFirePoi length
    Then I should get the total fire events in London

  Scenario: Get events per month for birmingham
    Given There is a viewBrumFirePoi array containing FirePoi objects with dates
    When i call FirePoi object .month
    Then i should get the month the event occured

