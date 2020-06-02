import React from "react";
import { render, fireEvent } from "react-testing-library";
import Inscription from "../Inscription";

it("renders without crashing", () => {
  const { getByText, getByLabelText, debug } = render(<Inscription />);

  debug(getByLabelText("homme"));

  fireEvent.change(getByLabelText("homme"), { target: { value: "a" } });
  fireEvent.click(getByLabelText("homme"));

  expect(getByLabelText("homme")).toHaveAttribute("checked");
});
