import { UserType } from "../../../contrib/services/user/lib";

export enum AppTheme {
  LIGHT = "light",
  DARK = "dark",
}

export interface AppProps {}

export interface AppState {
  theme: AppTheme;
}

export interface AppController {
  onThemeChange: (theme: AppTheme) => void;
  isLoggedIn: boolean;
  url: string;
  userType: UserType;
}
