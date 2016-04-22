function formSubmit(organization_name)
{
  document.forms[0].organization.name = organization_name;
  document.forms[0].submit();
}