import React from "react";
import ReactDom from "react-dom";
import Inscription from "./../Inscription";
import { mount, configure } from "enzyme";
import Adapter from "enzyme-adapter-react-16";

configure({ adapter: new Adapter() });

it("créer un élément", () => {
  const div = document.createElement("div");
  ReactDom.render(<Inscription></Inscription>, div);
});

describe("<Inscription>", function () {
  it("Vérifie le fonctionnement du onChange de pseudo", function () {
    const component = mount(<Inscription />);
    const input = component.find("input").at(0);
    input.instance().value = "hello";
    input.simulate("change");
    expect(component.state().pseudo).toEqual("hello");
  });

  it("Vérifie le fonctionnement du onChange du mail", function () {
    const component = mount(<Inscription />);
    const input = component.find("input").at(1);
    input.instance().value = "mail@hotmail.com";
    input.simulate("change");
    expect(component.state().mail).toEqual("mail@hotmail.com");
  });
});
