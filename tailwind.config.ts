import type { Config } from "tailwindcss";
import defaultTheme from "tailwindcss/defaultTheme";

export default <Partial<Config>>{
  theme: {
    extend: {
      colors: {
        primary: defaultTheme.colors.green,
      },
      zIndex: {
        "-1": "-1",
      },
    },
  },
};
