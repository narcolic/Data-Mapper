Feature: Create objects from orm.yml files
  In order to create a FirePoi object
  As a context developer
  I need to setup appropriate ORM mapping

  Scenario: Call ->getRepository('AppBundle:FirePoi'), as a database query
    Given There is a FirePoi.orm.yml file
    When I call a query to a firepoi entity
    Then a FirePoi object is created for each entity's instance